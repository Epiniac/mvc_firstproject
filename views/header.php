<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display+SC');

    * {
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
        color: inherit;
        border: thick double #FF8C00;
        border-radius: 30px;
        padding: 5px;
    }

    body {
        font: normal 18px 'Open Sans', sans-serif;
        background: #fafafa;
        color: #333;
    }


    header {
        background: #FF8C00;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    header h1, header a {
        color: #fff;
    }

    h1,h2,h3{
        font: normal 4em 'Playfair Display SC', serif;
        text-align:center;
    }

    nav {
        max-width: 800px;
        margin: auto;
        display: flex;
        flex-wrap: wrap;
    }

    nav a {
        flex-grow: 1;
        text-align: center;
        padding: 1em;
        position: relative;
    }

        // animmation
    nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right:0;
        height: 2px;
        transform: scaleX(0);
        background: #333;
        transition: 0.7s transform cubic-bezier(0.06, 0.9, 0.28, 1);
    }

    nav a:hover::after{
        transform: scaleX(1)
    }

    .display{
        display: flex;
        justify-content: space-around;
        padding: 3em;
        
    }


</style>
    <header>
        <h1>Labo de Chimie</h2>
        <nav>
            <a href="http://localhost/php_mvc/index.php?action=viewMolecules">Vos molécules</a>
            <a href="http://localhost/php_mvc/index.php?action=createMolecule">Créer</a>
        </nav>
    </header>
