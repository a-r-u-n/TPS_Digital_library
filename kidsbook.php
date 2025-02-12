<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio/Video Books - Digital Library</title>
    <link rel="stylesheet" href="ebooks.css">

   
    <style>
        .vbook-content{
            background-color:white;
            padding: 40px 20px;
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
            height: 150px;
        }
        a{
            text-decoration:none;
        }
        p{
            text-align:center;
        }
    </style>
</head>
<body>


    <?php include 'interface.php'; ?>
    <section class="vbook-content">
        <h2>Animated Video Read Aloud Books for Kids</h2>
        <div class="books-grid">
            
            <div class="book-item">
                <a href="https://www.youtube.com/watch?v=XoMXeo7E8xk">
                    <img src="AudioBooks/book_images/theBoyWhoGrewAForest.jpg" alt="The Boy Who Grew a Forest">
              
                <h5>The Boy Who Grew a Forest</h5>  </a>
            </div>
            
            
            <div class="book-item">
                <a href="https://www.youtube.com/watch?v=YLGPGYW3q6w">
                    <img src="AudioBooks/book_images/dreamYoullBe.jpg" alt="Dream You'll Be! | Animated Kids Book">
               
                <h5>Dream You'll Be! | Animated Kids Book</h5> </a>
            </div>
            <div class="book-item">
                <a href="https://www.youtube.com/watch?v=LhYP7qdUb14">
                    <img src="AudioBooks/book_images/theSillyCell.jpg" alt="The Silly Cell – 🧬 Discover the different cells in the body in this learning read aloud!">
                
                <h5>The Silly Cell🧬 Discover the different cells in the body</h5></a>
            </div>
            <div class="book-item">
                <a href="https://www.youtube.com/watch?v=m_cIlCEb_ok">
                    <img src="AudioBooks/book_images/maeTheMayfly.jpg" alt="Mae The Mayfly!">
                
                <h5>Mae The Mayfly!</h5></a>
            </div>
            <div class="book-item">
                <a href="https://www.youtube.com/watch?v=pCU_P4ruhdM&t=83s">
                    <img src="AudioBooks/book_images/misterFairy.jpg" alt="Mister Fairy! ">
                
                <h5>Mister Fairy! </h5></a>
            </div>
        </div>
        
        <h2>Tamil Audio Books</h2>
        <p> Credits: Kadhai Osai</p>
        <div class="books-grid">
            
            <div class="book-item">
                <a href="AudioBooks/PS1_Pagam1_adhyayam1.mp3">
                    <img src="ebooks/book_images/ps.jpg" alt="Ponniyin Selvan">
              
                <h5>Ponniyin Selvan Paagam-1 Adhyaayam-1</h5>  </a>
            </div>
            <div class="book-item">
                <a href="AudioBooks/sivagamiyinSabathamP1.mp3">
                    <img src="ebooks/book_images/sivgamyinSabatham.jpg" alt="Sivagamiyin Sabatham">
              
                <h5>Sivagamiyin Sabatham Paagam-1</h5>  </a>
            </div>
            <div class="book-item">
                <a href="AudioBooks/yanaiDoctor.mp3">
                    <img src="AudioBooks/book_images/yanaiDoctor.jpg" alt="Yanai Doctor">
              
                <h5>Yanai Doctor- Jeyamohan</h5>  </a>
            </div>
            <div class="book-item">
                <a href="AudioBooks/parinamam.mp3">
                    <img src="AudioBooks/book_images/parinamam.jpg" alt="Parinaamam">
              
                <h5>Parinaamam- Jeyamohan</h5>  </a>
            </div>
           
            </div>
            <h2>English Audio Books</h2>
            <p> Credits: Librivox</p>
            <div class="books-grid">
            
            <div class="book-item">
                <a href="AudioBooks/TimeMachine.mp3">
                    <img src="AudioBooks/book_images/time.png" alt="Time Machine">
              
                <h5>Time Machine - H.G.Wells</h5>  </a>
            </div>
            <div class="book-item">
                <a href="AudioBooks/aliceInWonderland.mp3">
                    <img src="AudioBooks/book_images/aliceInWonderland.jpg" alt="Alice in Wonderland">
              
                <h5>Alice in Wonderland - Lewis Carroll</h5>  </a>
            </div>
            <div class="book-item">
                <a href="AudioBooks/siddhartha.mp3">
                    <img src="AudioBooks/book_images/siddhartha.jpg" alt="Siddhartha">
              
                <h5>Siddhartha- Hermann Hesse</h5>  </a>
            </div>
    </div>

    </section>
    
</body>
</html>