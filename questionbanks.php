<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library</title>
    <link rel="stylesheet" href="qp.css">
    <style>
        #yearwisetitle{
         color: #3A3386;
        }
    .question-paper-container,.guidesContainer{

display: flex;
padding: 10px;
justify-content: center; 
align-items: center;  
text-align:center;
}

#classDropdown,#subjectDropdown,#classDropdownGuides{
    padding:3px;
    font-size:16px;
    font-weight: bold;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  
}
button  {
    border:none;
    display: inline-block;
    padding: 5px 8px;
    background-color: white;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s;
}

    </style>
</head>
<body>
    <?php include 'interface.php'; ?>
  
    <div class="question-bank">
    <h1 id="main-title">Question Bank</h1>
    <h4 style="text-align:center;"> Select Grade and Subject in the options given below to display Year-Wise Question Bank</h4>
    <!-- PHP will populate this dynamically -->

    <div class="question-paper-container">
    
    
    <!--   <label for="classDropdown">Select Class:</label> -->
    <select id="classDropdown" onchange="populateSubjects()">
        <option value="">Select Class</option>
        <option value="X">Grade 10</option>
        <option value="XII">Grade 12</option>
        <option value="Neet">NEET (Solved)</option>
        <option value="Jee">JEE (Solved)</option>
    </select>

  <!--    <label for="subjectDropdown" class="hidden">Select Subject:</label> -->
    <select id="subjectDropdown" class="hidden" onchange="displayPapers()">
        <option value="">Select Subject</option>
    </select>
</div>

    <div id="papersContainer" class="hidden">
        <h3 id="yearwisetitle" style="text-align:center">Year-wise Question Papers</h3>
        <table id="qptable" class="qptable">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Question Paper</th>
                </tr>
            </thead>
            <tbody>
                <!-- Question papers will be populated here -->
            </tbody>
        </table>
    </div>
</div>
<h1 id="main-title">Subject Guides</h1>
<h4 style="text-align:center;"> Select Grade in the option given below to display Guides and Materials</h4>
<div class="guidesContainer">
    

    <!--   <label for="classDropdown">Select Class:</label> -->
      
    <select id="classDropdownGuides"   onchange="displayGuides()">
        <option value="">Select Class</option>
       
        <option value="XII">Grade 12</option>
        <option value="X">Grade 10</option>
        
    </select>

</div>


    <div id="guidePdfContainer" class="hidden">
        <h3 id="GuideHeading" style="text-align:center">Subject-wise Guides</h3>
        <table id="guideTable" class="guideTable">
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Guides</th>
                </tr>
            </thead>
            <tbody>
                <!-- Question papers will be populated here -->
            </tbody>
        </table>
    </div>
</div>


    </div>
    <div style="text-align:center;">
    <h3 style="color: #3A3386;">Additional Resources</h3>
   
<button><a href="http://ndl.iitkgp.ac.in/se_document/kv_devlali/IN__K__1_2">Study Materials for Grade 1 to 12</a></button>
<button><a href="https://ndl.iitkgp.ac.in/he_browse/ddc?ddc%5B%5D=000">Video Lectures</a></button>
</div>

    <?php include 'qpdisplay.php'; ?> 
           
        


