<?php

$servername ="localhost";
$username= "root";
$password= "root";
$dbname= "digitalLib";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo '<script>
function populateSubjects() {
    const classDropdown = document.getElementById("classDropdown").value;
    const subjectDropdown = document.getElementById("subjectDropdown");
    const label = document.querySelector(\'label[for="subjectDropdown"]\');

    if (classDropdown) {
        let subjects = "";

        if (classDropdown === "X") {
            subjects = `
                <option value="">Select Subject</option>
                <option value="Maths">Maths</option>
                <option value="Science">Science</option>
                <option value="Social">Social</option>
                <option value="English">English</option>
            `;
        } else if (classDropdown === "XII") {
            subjects = `
                <option value="">Select Subject</option>
                <option value="Maths">Maths</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Physics">Physics</option>
                <option value="Biology">Biology</option>
                <option value="Computer_Science">Computer Science</option>
                <option value="Economics">Economics</option>
                <option value="Commerce">Commerce</option>
                <option value="Accountancy">Accountancy</option>
                <option value="Physical_Education">Physical Education</option>
                <option value="Business_Studies">Business Studies</option>

            `;
        }
            else if(classDropdown ==="Neet"){
            subjects=`
            <option value="">Select Subject</option>
            <option value="Biology">Biology</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            `;
}
             else if(classDropdown ==="Jee"){
            subjects=`
            <option value="">Select Subject</option>
            <option value="Maths">Maths</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            `;
}

        subjectDropdown.innerHTML = subjects;
        subjectDropdown.classList.remove("hidden");
        label.classList.remove("hidden");
    } else {
        subjectDropdown.classList.add("hidden");
        label.classList.add("hidden");
    }

    document.getElementById("papersContainer").classList.add("hidden");
}

function displayPapers() {
    const classDropdown = document.getElementById("classDropdown").value;
    const subjectDropdown = document.getElementById("subjectDropdown").value;
    const papersTableBody = document.getElementById("qptable").querySelector("tbody");
    console.log(subjectDropdown);
    if (subjectDropdown) {
        let papers = "";

        if (classDropdown === "X") {
            papers = `
             <tr>
                    <td>2017</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2017.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
            <tr>
                    <td>2018</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2018.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2019.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2020.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2022</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2022.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2023</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2023.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td><a href="qb/yearwise/x/${subjectDropdown}/2024.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
            `;
        } else if (classDropdown === "XII") {
            papers = `
            <tr>
                    <td>2017</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2017.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2018</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2018.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2019.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2020.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2022</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2022.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2023</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2023.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2024</td>
                    <td><a href="qb/yearwise/xii/${subjectDropdown}/2024.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
            `;
        }
             else if (classDropdown === "Neet") {
            papers = `
            <tr>
                    <td>2019</td>
                    <td><a href="qb/yearwise/neet/${subjectDropdown}/2019.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><a href="qb/yearwise/neet/${subjectDropdown}/2020.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2021</td>
                    <td><a href="qb/yearwise/neet/${subjectDropdown}/2021.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2022</td>
                    <td><a href="qb/yearwise/neet/${subjectDropdown}/2022.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td>2023</td>
                    <td><a href="qb/yearwise/neet/${subjectDropdown}/2023.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  `;
        }
                   else if (classDropdown === "Jee") {
            papers = `
            <tr>
                    <td>2019</td>
                    <td><a href="qb/yearwise/jee/${subjectDropdown}/2019.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td><a href="qb/yearwise/jee/${subjectDropdown}/2020.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2021</td>
                    <td><a href="qb/yearwise/jee/${subjectDropdown}/2021.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                  <tr>
                    <td>2022</td>
                    <td><a href="qb/yearwise/jee/${subjectDropdown}/2022.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td>2023</td>
                    <td><a href="qb/yearwise/jee/${subjectDropdown}/2023.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td><a href="https://askfilo.com/exams/jee-mains-previous-year-ques-papers">More</a></td>
                    <td><a href="https://askfilo.com/exams/jee-mains-previous-year-ques-papers">Click Here to Open</a></td>
                </tr>
                  `;
        }

        papersTableBody.innerHTML = papers;
        document.getElementById("papersContainer").classList.remove("hidden");
    } else {
        document.getElementById("papersContainer").classList.add("hidden");
    }
       
}


   function displayGuides() {
    const classDropdownGuides = document.getElementById("classDropdownGuides").value;
    const guidesTableBody = document.getElementById("guideTable").querySelector("tbody");

    if (classDropdownGuides) {
        let guides = "";

        if (classDropdownGuides === "XII") {
            guides = `
             <tr>
                    <td>English</td>
                    <td><a href="Guides/XII/English.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td>Biology</td>
                    <td><a href="Guides/XII/Biology.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>Physics</td>
                    <td><a href="Guides/XII/Physics.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                <tr>
                    <td>Chemistry</td>
                    <td><a href="Guides/XII/Chemistry.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td>Accountancy</td>
                    <td><a href="Guides/XII/Accountancy.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
               
            `;
        }
             else if (classDropdownGuides === "X") {
                 guides = `
                
                <tr>
                    <td>English</td>
                    <td><a href="Guides/X/English.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
                 <tr>
                    <td>Social Science</td>
                    <td><a href="Guides/X/Social.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
             <tr>
                    <td>Science</td>
                    <td><a href="Guides/X/Science.pdf" target="_blank">Click Here to Open</a></td>
                </tr>
            `;
                }
        guidesTableBody.innerHTML = guides;
        document.getElementById("guidePdfContainer").classList.remove("hidden");
    } else {
        document.getElementById("guidePdfContainer").classList.add("hidden");
    }
}
</script>';

?>
