<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link rel="stylesheet" href="/css/bootstrap.min.css" />
            <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="/js/bootstrap.min.js"></script>
            <title>{% block title %}{% endblock %} - My Webpage</title>
        {% endblock %}
    </head>
    <body>
        {{ include("Componentes/navbar.php") }}
        <main class="container-fluid">
            {% block content %}{% endblock %}
        </main>
    </body>
</html>
