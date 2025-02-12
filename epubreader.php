<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBooks - Digital Library</title>
    <link rel="stylesheet" href="ebooks.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="node_modules/epubjs/dist/epub.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="node_modules/epubjs/dist/epub.min.js"></script>


</head>

<body>

    <?php include 'interface.php'; ?>
    <div style= "background-color:white"; id="viewer"></div>
    <a id="prev" href="#prev" class="arrow">‹</a>
    <a id="next" href="#next" class="arrow">›</a>


    <!-- Custom script to render the EPUB -->
    <script>
        

        document.querySelectorAll('section.ebooks-content a').forEach(link => {
          
            console.log('section.ebooks-content a');

            // Add click event listener to each link
            link.addEventListener('click', function (e) {
               
                e.preventDefault(); // Prevent the default link behavior

                // Get the URL of the EPUB file
                var fileUrl = this.getAttribute('href');
                console.log(this.getAttribute('href'));

                // Initialize and render the ePub file
                var book = ePub(fileUrl);
                var rendition = book.renderTo("viewer", {
                    width: "100%",
                    height: "500px"
                });
                rendition.display();
                book.ready.then(function () {
                    document.getElementsByClassName(".ebooks-content").style.display=none

                    var next = document.getElementById("next");

                    next.addEventListener("click", function (e) {
                        book.package.metadata.direction === "rtl" ? rendition.prev() : rendition.next();
                        e.preventDefault();
                    }, false);

                    var prev = document.getElementById("prev");
                    prev.addEventListener("click", function (e) {
                        book.package.metadata.direction === "rtl" ? rendition.next() : rendition.prev();
                        e.preventDefault();
                    }, false);

                    var keyListener = function (e) {

                        // Left Key
                        if ((e.keyCode || e.which) == 37) {
                            book.package.metadata.direction === "rtl" ? rendition.next() : rendition.prev();
                        }

                        // Right Key
                        if ((e.keyCode || e.which) == 39) {
                            book.package.metadata.direction === "rtl" ? rendition.prev() : rendition.next();
                        }

                    };

                    rendition.on("keyup", keyListener);
                    document.addEventListener("keyup", keyListener, false);

                })

                var title = document.getElementById("title");

                rendition.on("rendered", function (section) {
                    var current = book.navigation && book.navigation.get(section.href);

                    if (current) {
                        var $select = document.getElementById("toc");
                        var $selected = $select.querySelector("option[selected]");
                        if ($selected) {
                            $selected.removeAttribute("selected");
                        }

                        var $options = $select.querySelectorAll("option");
                        for (var i = 0; i < $options.length; ++i) {
                            let selected = $options[i].getAttribute("ref") === current.href;
                            if (selected) {
                                $options[i].setAttribute("selected", "");
                            }
                        }
                    }

                });

                rendition.on("relocated", function (location) {
                    console.log(location);

                    var next = book.package.metadata.direction === "rtl" ? document.getElementById("prev") : document.getElementById("next");
                    var prev = book.package.metadata.direction === "rtl" ? document.getElementById("next") : document.getElementById("prev");

                    if (location.atEnd) {
                        next.style.visibility = "hidden";
                    } else {
                        next.style.visibility = "visible";
                    }

                    if (location.atStart) {
                        prev.style.visibility = "hidden";
                    } else {
                        prev.style.visibility = "visible";
                    }

                });

                rendition.on("layout", function (layout) {
                    let viewer = document.getElementById("viewer");

                    if (layout.spread) {
                        viewer.classList.remove('single');
                    } else {
                        viewer.classList.add('single');
                    }
                });

                window.addEventListener("unload", function () {
                    console.log("unloading");
                    this.book.destroy();
                });

                book.loaded.navigation.then(function (toc) {
                    var $select = document.getElementById("toc"),
                        docfrag = document.createDocumentFragment();

                    toc.forEach(function (chapter) {
                        var option = document.createElement("option");
                        option.textContent = chapter.label;
                        option.setAttribute("ref", chapter.href);

                        docfrag.appendChild(option);
                    });

                    $select.appendChild(docfrag);

                    $select.onchange = function () {
                        var index = $select.selectedIndex,
                            url = $select.options[index].getAttribute("ref");
                        rendition.display(url);
                        return false;
                    };

                });


            });

        });  </script>
