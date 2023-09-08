<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-secondary my-3">

<div class="container bg-white p-4">

    <h3 class="text-center py-1"> Shape Perimeter/Area Calculator</h3>

    <!-- Tabs -->
    <ul class="nav nav-tabs" id="myTabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#rectangleContent">Rectangle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#circleContent">Circle</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#cubeContent">Cube</a>
        </li>
    </ul>

    <!-- Tab contents -->
    <div id="tabContents">

        <div id="rectangleContent" class="tab-content active pt-3">
            
            <div class="row">
                <div class="col-12">
                    <form class="row" method="POST" action="Views/show.php">
                        <div class="mb-3 col-auto">
                            <label for="length" class="form-label">Length</label>
                            <input type="number" class="form-control" name="length" placeholder="rectangle length">
                        </div>
                        <div class="mb-3 col-auto">
                            <label for="width" class="form-label">Width</label>
                            <input type="number" class="form-control"  name="width" placeholder="rectangle width">
                        </div>

                        <input type="hidden" name="shape" value="rectangle">
                        <input type="hidden" name="activeTabOn" id="activeTabOn" value="">

                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" name="perimeter" value= "perimeter" class="btn btn-primary mb-3">Calculate Perimeter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-auto">
                                <button type="submit" name="area" value="area" class="btn btn-primary mb-3" >Calculate Area</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>

        <div id="circleContent" class="tab-content pt-3">
            <div class="row">
                <div class="col-12">
                <form class="row" method="post" action="Views/show.php">
                        <div class="mb-3 col-auto">
                            <label for="Radius" class="form-label">Radius</label>
                            <input type="number" class="form-control" name="radius" placeholder="Circle radius">
                        </div>

                        <input type="hidden" name="shape" value="circle">
                        <input type="hidden" name="activeTabOn" id="activeTabOn" value="">

                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" name="perimeter" value= "perimeter" class="btn btn-primary mb-3">Calculate Perimeter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-auto">
                                <button type="submit" name="area" value="area" class="btn btn-primary mb-3" >Calculate Area</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="cubeContent" class="tab-content pt-3">
            <div class="row">
                <div class="col-12">
                <form class="row" action="Views/show.php" method="post">
                        <div class="mb-3 col-auto">
                            <label for="side" class="form-label">Cube</label>
                            <input type="number" name="side" class="form-control" id="side" placeholder="Cube side">
                        </div>

                        <input type="hidden" name="shape" value="cube">
                        <input type="hidden" name="activeTabOn" id="activeTabOn" value="">

                        <div class="row">
                            <div class="col-auto">
                                <button type="submit" name="surfaceArea" value= "surfaceArea" class="btn btn-primary mb-3">Calculate Perimeter</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-auto">
                                <button type="submit" name="volume" value="volume" class="btn btn-primary mb-3" >Calculate Area</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Styles for the tab content -->
    <style>
        .tab-content {
            display: none; /* Initially hide all content */
        }

        .tab-content.active {
            display: block; /* Show the active content */
        }
    </style>

</div>

<script>
    const tabsContainer = document.getElementById('myTabs');
    const contentsContainer = document.getElementById('tabContents');

    tabsContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('nav-link')) {
            // Deactivate all tabs and hide their content
            const allTabs = tabsContainer.querySelectorAll('.nav-link');
            allTabs.forEach(tab => {
                tab.classList.remove('active');
                tab.setAttribute('aria-current', 'false');
                const content = contentsContainer.querySelector(tab.getAttribute('href'));
                if (content) content.classList.remove('active');
            });

            // Activate the clicked tab and show its content
            event.target.classList.add('active');
            event.target.setAttribute('aria-current', 'page');
            const contentToShow = contentsContainer.querySelector(event.target.getAttribute('href'));
            if (contentToShow) contentToShow.classList.add('active');

            event.preventDefault();
        }
    });

    window.onload = function() {
        document.getElementById('activeTabOn').value = window.location.href;
    }
</script>
    
</body>
</html>