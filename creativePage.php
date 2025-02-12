<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TPS Inspires - Digital Library</title>
    <link rel="stylesheet" href="ebooks.css">

   
    <style>
        .vbook-content{
            background-color:white;
            padding: 10px 10px;
        }
        .vbook-content h2{
            text-align:center;
            color: #3A3386;
            
        }
        /* Individual book item */
        .books-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            border-bottom: 2px solid #2c3e50;
        }

        .book-item {
            width: 200px;
            text-align: center;
            
        }

        .book-item img {
            width: 100%; 
            height: 250px;
        }
        a{
            text-decoration:none;
        }
        p{
            text-align:center;
        }
   #dispMesg{
    display:flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;


   }
   .mesgContent{
   
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 600px;
    text-align: left;
   }
   .close {
    float: right;
    font-size: 24px;
    cursor: pointer;
}
.review-cards {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    justify-content: center;
}

.card {
    width: 250px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: box-shadow 0.3s ease;
}

.card:hover {
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 80%;
    max-width: 600px;
    text-align: left;
}
   </style>

    <script>
    function closeMesg(){
        document.getElementById("dispMesg").style.display="none";
    }
    function showReview(reviewId) {
    document.getElementById(reviewId).style.display = "flex";
}

function closeReview(reviewId) {
    document.getElementById(reviewId).style.display = "none";
}
    </script>
</head>
<body>


    <?php include 'interface.php'; ?>
    <div class="dispMesg" id="dispMesg" >
            <div class="mesgContent">
            <span class="close" onclick="closeMesg()">&times</span>
            <h4 style="text-align:left;"> We invite you to share your creativity with the School! Whether it's artwork, drawings, stories, poems, or any other creative expression, the Digital Library is the perfect place to showcase your talents. Submit your creations to be featured on our Creative Corner page and inspire others with your imagination. Let your creativity shine!</h4>
            </div>
    </div>
    <section class="vbook-content">
    
        <h3 style="text-align:left; color:White; background-color:#3A3386; padding:15px;">We invite you to share your creativity with the School! Whether it's artwork, drawings, stories, poems, or any other creative expression, the Digital Library is the perfect place to showcase your talents. Submit your creations to be featured on our Creative Corner page and inspire others with your imagination. Let your creativity shine!</h3>
        <h2>Art Gallery</h2>
        <div class="books-grid">
           
            <div class="book-item">
                
            <a href="images/creatives/1.jpg"> <img src="images/creatives/1.jpg" alt=""></a>
              
                <h5>Nagul Varshan Grade-6 C</h5>  
            </div>
            
            
            <div class="book-item">
                
                   <a href="images/creatives/2.jpg"> <img src="images/creatives/2.jpg" alt=""></a>
               
                <h5>Nagul Varshan Grade-6 C</h5>
            </div>
            <div class="book-item">
                
                <a href="images/creatives/3.jpg"> <img src="images/creatives/3.jpg" alt=""></a>
            
             <h5>Ajeev Grade-7 B</h5>
         </div>
           
        </div>
        
        <h2>Book Reviews</h2>
        <div class="review-cards">
 
        <div class="card" onclick="showReview('review1')">
            <h3>Geronimo Stiltion</h3>
            <p>Review by Aniswar Grade 8-A</p>
            <p>It is one of the bestimouse story....</p>
        </div>
        <div id="review1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeReview('review1')">&times;</span>
                
                <h3>Geronimo Stiltion Treasure Of The Maya #83:</h3>
                <p>It is one of the bestimouse story. The story is based on saving Thea Stilton, who is lost while went to Mexico for a report of a jewel. Geronimo, Bruce Hyena and Hercule Poirat try to find her.
It is a next generation story in Geronimo’s series. They have showed a super computer, build by Beaker Poirat especially for Geronimo. Read the book to find more info.
Rating: &#11088;&#11088;&#11088;&#11088;&#11088;
</p>
            </div>
        </div>
    <div class="card" onclick="showReview('review1')">
            <h3>Geronimo Stiltion</h3>
            <p>Review by Prithivish Grade 8-A</p>
            <p>You must try this fabumouse story....</p>
        </div>
        <div id="review1" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeReview('review1')">&times;</span>
                <h3>Geronimo Stiltion Treasure Of The Maya #83:</h3>
                <p>You must try this fabumouse story. This story consists of Geronimo Stilton, Thea Stilton, Hercule Poirat and super computer which is very talkative.
Shadow is trying to steal the Mayan necklace and if you are still reading this thingy you have to start Geronimo Stilton’s Fabumouse series. This is the 83rd book in the normal Geronimo series.
Rating: &#11088;&#11088;&#11088;
</p>
            </div>
        </div>
    </div>
           
    </section>
   
</body>
</html>