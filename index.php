<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <style>
        * {
   
    box-sizing: border-box;
}

        .quotes{
            background-color:#F1C40F;
            color:#3A3386;
            text-align: center;
            height:1%;
            padding:5px;
        }
        section.content {
            position: relative;
    width:100%;
    height:80%;
    min-height:550px;
    padding: 65px 60px;
    background-image:url('images/digitallib2.jpeg') ;
    background-repeat: no-repeat;
   background-attachment: fixed; 
   background-size: 100% 100%;
  
 
    
}
section.content::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); 
    z-index: 1;
}
section.content .content-text{
    position: relative;
    z-index: 2;
    color: white; 
    
}

section.content .content-text h2 {
    font-size: 2rem;
    color:#FFFACD;
    
    margin-bottom: 20px;
}

section.content .content-text p {
    font-size: 1.5rem; 
    display:inline;
    color:#FFFACD;
    line-height: 1.8;
    max-width: 800px;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
}

    </style>
</head>
<body>
    <?php include 'interface.php'; ?> 
    
    <section class="content">
        <div class="content-text">
            <h2>Digital Library</h2>
            <!--<img style="float: right; width:550px;height:450px;padding-bottom:100px" src="images/digitallib.jpg"> --> 
             
                         <p>

            Welcome to our Digital Library initiative, where we are dedicated to revolutionizing access to knowledge and fostering a love for reading. This is an initial phase of Digital Library that features a starting point to effectively provide access to a wide range of books and resources. Alongside our physical book collection, we are also excited to include digital content to enhance learning experience.Our mission is not only to provide easy access to books but also to create an engaging and interactive environment for learning.
            </p>
            
        </div>
       
    </section>
    <div class="quotes">
            <h2>"Nothing is pleasanter than exploring a Library." </h2>
            <h4> -Walter Savage Landor</h4> 
        </div>

  
</body>
</html>