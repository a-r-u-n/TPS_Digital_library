<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBooks - Digital Library</title>
    <link rel="stylesheet" href="ebooks.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script src="node_modules/epubjs/dist/epub.min.js"></script>

<style>
    #prev{
        position: absolute; top: 50%; left: 0px; z-index: 1; width: 17px; height: 25px; display:block;color: rgba(1, 1, 1, 1); 
    }
    #next{
        position: absolute; top: 50%; right:0px; z-index: 1; width: 17px; height: 25px; display: block;
    }
 
    #tools{
        display:flex;
        margin-top:0;
        margin-right:20px;
        margin:0;
        justify-content: center; 
        align-items: center; 
        text-align:center; 
    }
    button  {
    border:none;
    padding:7px;
    display: inline-block;
    padding: 5px 8px;
    margin-right:20px;
    background-color: #04AA6D; ;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.5s;
    transition: color:white;
}
button:active,a:active {
            background-color: rgb(0);
            transform: translateY(4px);
        }
    </style>

</head>

<body>

    <?php include 'interface.php'; ?>
    <section id="mySection" class="ebooks-content">
        <!-- <H2>EBOOKS</H2> -->

        <?php include 'displayebook.php'; ?>
    </section>
    
   
    <div Style="background-color:white; display:none; " id="viewer" class="viewer">
    <h4 style="margin:3px; color:grey;">Navigation Tip: Use the Right Arrow (→) or Left Arrow (←) keys on your keyboard for seamless page navigation, or simply click the < and > buttons on the sides on the Screen. Happy reading and enjoy your journey through the pages!

 
    
</h4>
        <div id="tools">
        <button class="backtolist "  style ="padding:5px; margin-left:2px;"><a id="directToList" href="ebook.php" style="text-decoration:none;font-weight: bold;">Change eBook</a></button>
    <a id="prev" href="#prev" class="arrow"><img src="images/pre1.png"></a>
    <a id="next" href="#next" class="arrow"><img src="images/nex1.png"></a>
   

<a id="zoomin"><img src="images/plus2.png" style="width:40px;"></a>
<a  id="zoomout"><img src="images/minus2.png" style="width:40px;" ></a>
<div>
<!--<select id="layout_style"> 
    <option value="single">Single Page View</option>
    <option value="spread">Book view</option>  -->
    
</div>



    <script>
        $message="";
      
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
    let currentFontSize = 16; // Default size in pixels

// Zoom In function
function zoomIn() {
    currentFontSize += 2; // Increase font size
    rendition.themes.fontSize(currentFontSize + "px"); // Apply the new font size
    console.log("Current font size:", currentFontSize);
}

// Zoom Out function
function zoomOut() {
    currentFontSize -= 2; // Decrease font size
    if (currentFontSize >= 8) { // Minimum font size limit
        rendition.themes.fontSize(currentFontSize + "px"); // Apply the new font size
    }
    console.log("Current font size:", currentFontSize);
}
document.getElementById("zoomin").addEventListener("click", zoomIn);
document.getElementById("zoomout").addEventListener("click", zoomOut);
  
              rendition.display();

              
                
              book.ready.then(function () {
                 

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
                      if ((e.keyCode || e.which ) == 37) {
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
/*
              rendition.on("layout", function (layout) {
                  let viewer = document.getElementById("viewer");
                
                  if (layout.spread) {
                      viewer.classList.remove('single');
                  } else {
                      viewer.classList.add('single');
                  }
                    
                     
              });
*/
document.getElementById("layout_style").addEventListener("change", function() {
    var layoutMode = this.value; // Get selected layout
    
    rendition.on("layout", function(layout) {
        let viewer = document.getElementById("viewer");

        if (layoutMode === "spread") {
            rendition.layout({ spread: true });
            viewer.classList.remove('single');
        } else {
            rendition.layout({ spread: false });
            viewer.classList.add('single');
        }
    });
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
        
      }); 
      //alert($message);
      </script>
<script>
     
    function toggleSection() {
    
    var section = document.querySelector('.ebooks-content');
    var viewer= document.querySelector('.viewer');
   
    if (section.style.display === 'none' && viewer.style.display==='block') {

        section.style.display = 'block'; // Show the section
        viewer.style.display = 'none'; 
    } else {
        section.style.display = 'none';  // Hide the section
        viewer.style.display = 'block'; 
    }
}
</script>