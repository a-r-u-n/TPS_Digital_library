<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eBooks - Digital Library</title>
    <link rel="stylesheet" href="feedback.css">
 
  
<style>
select, #rateDropdown option {
    font-size:20px;
}
</style>
</head>

<body>

    <?php include 'interface.php'; ?>
    <div class="feedback-section">
        <h2>Submit Your Feedback</h2>
        <form id="feedbackForm" action="feed.php" method="POST">
            <label for="name">Name and Class/Designation:</label>
            <input type="text" id="name" name="name" required>
            <label for="rating">How you would rate for the Digital Library</label>
            <select id="rateDropdown" name="rating">
            <option value="5">&#11088;&#11088;&#11088;&#11088;&#11088;</option>
            <option value="4">&#11088;&#11088;&#11088;&#11088;</option>
            <option value="3">&#11088;&#11088;&#11088;</option>
            <option value="2">&#11088;&#11088;</option>
            <option value="1">&#11088;</option></select>
            <label for="suggestion"> How we can improve our digital library? Your suggestions</label>
            <textarea id="suggestion" name="suggestion" rows="2" required></textarea>
            <label for="preference"> How do digital resources differ from printed resources, and which one do you prefer?</label>
            <textarea id="preference" name="preference" rows="2" required></textarea>
            <label for="feedback">Your additional Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" required></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>