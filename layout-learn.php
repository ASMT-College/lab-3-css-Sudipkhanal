<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        width: 100vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: #f0f0f0;
    }

    nav,
    footer {
        border: 1px solid gray;
        width: 100%;
        padding: 2rem 0;
        background-color: #ffffff;
    }

    #main_container {
        display: flex;
        justify-content: space-between;
        flex: 1;
        width: 100%;
    }

    #body_container {
        width: 70%;
        border: 1px dotted red;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        padding: 1rem;
        margin: 1rem;
    }

    #sidebar {
        width: 30%;
        border: 1px dotted red;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        padding: 1rem;
        margin: 1rem;
    }

    @media screen and (max-width: 500px) {
        #main_container {
            flex-direction: column;
        }

        #body_container,
        #sidebar {
            width: 100%;
        }
    }
</style>

<body>

    <nav>
        <header>
            <h2>Header</h2>
        </header>
    </nav>

    <div id="main_container">
        <div id="body_container">
            <h2>Body</h2>
        </div>
        <aside id="sidebar">
            <h2>Sidebar</h2>
        </aside>
    </div>

    <footer>
        <h2>Footer</h2>
    </footer>

</body>

</html>
