{% extends 'default.php' %}

{% block blocks %}
        {% set IS_MAIN = false %}
        {% include 'header/block.php' %}
        {% include 'thanks/block.php' %}
        {% include 'footer/block.php' %}

{% endblock %}