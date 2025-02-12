<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="resourcepage.css">
<style>
    
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.section-header {
    text-align: center;
    margin-bottom: 30px;
}

.res-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;

}

.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 250px;
    text-align: center;
    padding: 15px;
    transition: transform 0.3s;
}

.card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 8px;
}

.card h3 {
    margin-top: 10px;
    font-size: 18px;
    color: #333;
}

.card p {
    font-size: 14px;
    color: #777;
}

.card:hover {
    transform: scale(1.05);
}

.more-button {
    display: block;
    width: 100%;
    text-align: center;
    margin-top: 20px;
}

.more-button a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s;
}

.more-button a:hover {
    background-color: #0056b3;
}
</style>
</head>

<body>
    <?php include 'interface.php'; ?>

    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>NDLI Rare Book Societies</h2>
                <p>Explore a selection of rare and valuable books from NDLI's rare book societies.</p>
            </div>

            <div class="res-container">
               
                <div class="card"><a href="http://ndl.iitkgp.ac.in/ch_document/rbsi/ancient_india_01">
                        <img src="images/rarebook1.jpg" alt="Ancient India (Up to 1200 CE)">
                        <h3>Ancient India (Up to 1200 CE)</h3>
                        <p>Explore the history of Ancient India with this collection of rare books.</p>
                    </a>
                </div>
                <div class="card"><a href="http://ndl.iitkgp.ac.in/ch_document/rbsi/architecture_of_india_02">
                        <img src="images/rarebook2.jpg" alt="Architecture of India">
                        <h3>Architecture of India</h3>
                        <p>Dive into the architectural wonders of India through these rare collections.</p>
                    </a>
                </div>
                <div class="card"><a href="http://ndl.iitkgp.ac.in/ch_document/rbsi/festivals_of_india_12">
                        <img src="images/rarebook3.jpg" alt="Festivals of India">
                        <h3>Festivals of India</h3>
                        <p>Discover Festivals of India.</p>
                    </a>
                </div>
            </div>

           
            <div class="more-button">
                <a href="http://www.ndl.gov.in/ch_document/rbsi/root_0">More</a>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>Learn With Khan</h2>
                <p>Khan Academy is a free educational platform offering a wide range of courses in subjects like Math,
                    Science, Economics, and more. It’s an excellent resource for students of all ages.</p>
            </div>
            <div class="res-container">
                <div class="card"><a
                        href="https://www.khanacademy.org/math/ncert-class-6/x081f71e2033d0fb1:knowing-our-numbers-ncert-new/x081f71e2033d0fb1:comparing-numbers/quiz/x081f71e2033d0fb1:knowing-our-numbers-ncert-new-quiz-1?referrer=upsell">
                        <img src="images/khan.jpg" alt="khan academy">
                        <h3>Grade 6 NCERT Maths Quiz</h3>
                        <p>Self Evaluate your Maths Understanding </p>
                    </a>
                </div>
                <div class="card"><a
                        href="https://www.khanacademy.org/math/ncert-class-7/x2e0188ae427d64b7:integers-ncert-new/x2e0188ae427d64b7:multiplication-of-integers/quiz/x2e0188ae427d64b7:integers-ncert-new-quiz-1?referrer=upsell">
                        <img src="images/khan.jpg" alt="khan academy">
                        <h3>Grade 7 NCERT Maths Quiz</h3>
                        <p>Self Evaluate your Maths Understanding </p>
                    </a>
                </div>
                <div class="card"><a
                        href="https://www.khanacademy.org/math/ncert-class-8/x4eb5a6db275bcce1:rational-numbers-ncert-new/x4eb5a6db275bcce1:closure-associative-and-commutative-property/quiz/x4eb5a6db275bcce1:rational-numbers-ncert-new-quiz-1?referrer=upsell">
                        <img src="images/khan.jpg" alt="khan academy">
                        <h3>Grade 8 NCERT Maths Quiz</h3>
                        <p>Self Evaluate your Maths Understanding </p>
                    </a>
                </div>
                <div class="more-button">
                <a href="http://www.khanacademy.org/math">Quizes for Grade-9 & Above</a>
            </div>
                <div>
                    <h3> Learn from the video Lessons </h3>
                    <ul>
                        <li><a href="https://www.khanacademy.org/math/in-in-math-foundations" target="_blank">Math
                                Foundation</a></li>
                        <p> Offers comprehensive lessons to build and strengthen core mathematical skills from basic
                            arithmetic to advanced topics.</p>
                        <li><a href="https://www.khanacademy.org/math/in-math-ncert" target="_blank">NCERT Maths
                                Grade 1 to 12</a></li>
                        <p> NCERT Class wise Math Lessons with Quiz. Video lessons Teaches the concepts, Quizes
                            helps to self evaluate their understanding </p>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>NPTEL</h2>
                <p>The National Programme on Technology Enhanced Learning(NPTEL) is an Indian e-learning platform for university-level science, technology, engineering, and mathematics (STEM) subjects. </p>
            </div>

            <div class="res-container">
            <div class="card"><a href="https://nptel.ac.in/courses">
                        <img src="images/nptel.jpg" alt="internet archieve logo">
                        <h3>NPTEL</h3>
                        <p>You can apply to the courses you are interested in from the courses that are currently live.</p>
                    </a>
                </div>
                <div class="card"><a href="http://ndl.iitkgp.ac.in/he_document/nptel/IN__N__1_2">
                        <img src="images/ndli.jpg" alt="ndli logo">
                        <h3>NPTEL Courses on Computer Science</h3>
                        <p>Nptel Courses are archived in NDLI. You can watch all the Video contents without applying to the courses</p>
                    </a>
                </div>
                <div class="card"><a
                        href="http://ndl.iitkgp.ac.in/he_document/nptel/IN__N__1_2">
                        <img src="images/ndli.jpg" alt="internet archieve logo">
                        <h3>NPTEL Courses on Aerospace Engineering</h3>
                        <p>Nptel Courses are archived in NDLI. You can watch all the Video contents without applying to the courses</p>
                    </a>
                </div>
                
            </div>
            <div class="more-button">
                <a href="http://ndl.iitkgp.ac.in/he_document/nptel/IN__N__1_2">More</a>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>Newspaper Archives</h2>
                <p>Expolre the history through the newspaper archives</p>
            </div>

            <div class="res-container">
                
                <div class="card"><a href="https://ndl.iitkgp.ac.in/ndl_nw">
                        <img src="images/ndli.jpg" alt="ndli logo">
                        <h3>NDLI Indian and Foreign Newspaper Archives</h3>
                        <p>Explore the history of Ancient India.</p>
                    </a>
                </div>
                <div class="card"><a
                        href="https://archive.org/details/newspaperarchive?and%5B%5D=language%3A%22English%22">
                        <img src="images/internetarchives.jpg" alt="internet archieve logo">
                        <h3>Newspaper Archives from Internet Archives</h3>
                        <p>Explore the history of Ancient India.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>Astronomy Picture of the Day</h2>
                <p>Discover the cosmos! Each day a different image or photograph of our fascinating universe is
                    featured, along with a brief explanation written by a professional astronomer.</p>
            </div>

            <div class="res-container">
                
                <div class="card"><a href="https://apod.nasa.gov/apod/ap240810.html">
                        <img src="images/nasapic1.jpg" alt="">
                        <h3>The Light, Dark, and Dusty Trifid</h3>
                        <p>Nasa's Astronomy Picture of the Day</p>
                    </a>
                </div>
                <div class="card"><a href="https://apod.nasa.gov/apod/ap240819.html">
                        <img src="images/nasapic2.jpg" alt="">
                        <h3>The Cocoon Nebula</h3>
                        <p>Nasa's Astronomy Picture of the Day</p>
                    </a>

                </div>
                <div class="more-button">
                    <a href="https://apod.nasa.gov/apod/archivepix.html">Today's picture</a>
                </div>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>How Stuff Works</h2>
                <p>HowStuffWorks is a comprehensive resource offering explanations on a wide array of topics, including
                    science, technology, and culture. It breaks down complex concepts into easily understandable
                    content, making it an invaluable tool for learners of all ages. Whether you're curious about how
                    everyday objects work or looking to deepen your understanding of intricate topics, HowStuffWorks
                    provides engaging articles, videos, and quizzes to satisfy your curiosity.</p>
            </div>

            <div class="res-container">
             
                <div class="card"><a href="https://electronics.howstuffworks.com/tech">
                        <img src="images/howstuffworks1.jpg" alt="">
                        <h3>Articles in the field of Technology</h3>
                        <p></p>
                    </a>
                </div>
                <div class="card"><a href="https://apod.nasa.gov/apod/ap240819.html">
                        <img src="images/howstuffworks2.jpg" alt="">
                        <h3>Articles in the field of Science</h3>
                        <p></p>
                    </a>

                </div>
                <div class="more-button">
                    <a href="https://www.howstuffworks.com/">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>National Geographic kids</h2>
                <p></p>
            </div>

            <div class="res-container">
                
                <div class="card"><a href="https://kids.nationalgeographic.com/games/quizzes">
                        <img src="images/natgeo1.jpg" alt="">
                        <h3>Quizes</h3>
                        <p></p>
                    </a>
                </div>
                <div class="card"><a href="https://kids.nationalgeographic.com/animals/prehistoric">
                        <img style="object-fit:cover;" src="images/natgeo2.jpg" alt="">
                        <h3>Facts</h3>
                        <p></p>
                    </a>

                </div>
                <div class="more-button">
                    <a href="https://www.howstuffworks.com/">More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>Map Resources</h2>
                <p></p>
            </div>

            <div class="res-container">
               
                <div class="card"><a
                        href="https://www.ndl.gov.in/ch_browse/learningResourceType?learningResourceType%5B%5D=map">
                        <img src="images/ndli.jpg" alt="">
                        <h3>NDLI Maps</h3>
                        <p></p>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="resource-section">
        <div class="container">
            <div class="section-header">
                <h2>Other Learning resources</h2>
                <p></p>
            </div>

            <div class="res-container">
                
                <div class="card"><a href="https://www.edx.org/">
                        <img src="images/edx.png" alt="">
                        <h3>Edx</h3>
                        <p>Offering a wide range of high-quality courses from universities and institutions worldwide,
                            accessible to anyone, anywhere at free of cost.</p>
                    </a>
                </div>
                <div class="card"><a href="https://ed.ted.com/lessons?direction=desc&sort=featured-position&user_by_click=student">
                        <img style="height:230px; object-fit:cover;" src="images/teded.jpg" alt="">
                        <h3>Ted Ed</h3>
                        <p>Educational platform that creates and shares engaging animated videos and lessons on a variety of topics, aimed at educators, students, and lifelong learners.</p>
                    </a>
                </div>
                <div class="card"><a href="https://www.ted.com/talks/sam_berns_my_philosophy_for_a_happy_life?geo=hi">
                        <img  src="images/tedxtalk.jpg" alt="">
                        <h3>Tedx Talk</h3>
                        <p>TEDx Talks are independently organized local events, inspired by the global TED conference, where speakers share innovative ideas and inspiring stories within their communities.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>




</body>

</html>