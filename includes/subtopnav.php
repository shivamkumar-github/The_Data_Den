<div id="subtopnav">
    <button id="scroll-left" class="scroll-arrow">&#10094;</button>
    <div id="menu_items" style="padding-left: 15px; display: flex; overflow-x: auto; white-space: nowrap;">
        <?php
        $categories = [
            "python" => "Python", "statistics" => "Statistics", "mathematics" => "Mathematics", "excel" => "Excel",
            "dbms" => "DBMS", "sql" => "SQL", "machine_learning" => "Machine Learning", "deep_learning" => "Deep Learning",
            "selenium" => "Selenium", "r" => "R", "git" => "Git", "numpy" => "Numpy", "pandas" => "Pandas",
            "matplotlib" => "Matplotlib", "seaborn" => "Seaborn", "plotly" => "Plotly", "scipy" => "Scipy",
            "scikit_learn" => "Scikit-Learn", "tensorflow" => "Tensorflow", "keras" => "Keras", "pytorch" => "Pytorch",
            "nltk" => "NLTK", "opencv" => "OpenCV", "tableau" => "Tableau", "power_bi" => "Power BI", 
            "alteryx" => "Alteryx",
        ];
        foreach ($categories as $key => $value) {
            echo "<a data-category='$key' style='margin-right: 10px; padding: 5px; cursor: pointer;'>$value</a>";
        }
        ?>
    </div>
    <button id="scroll-right" class="scroll-arrow">&#10095;</button>
</div>

<script>
    document.getElementById("scroll-left").addEventListener("click", function() {
        document.getElementById("menu_items").scrollBy({ left: -100, behavior: 'smooth' });
    });
    
    document.getElementById("scroll-right").addEventListener("click", function() {
        document.getElementById("menu_items").scrollBy({ left: 100, behavior: 'smooth' });
    });
</script>