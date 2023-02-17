{% extends 'default.php' %}

{% block blocks %}
{% set IS_MAIN = true %}
{% include 'header/block.php' %}
{% include 'main/block.php' %}
{% set section1=true %}
{% include 'request/block.php' %}
{% include 'category/block.php' %}
{% include 'result/block.php' %}
{% include 'about/block.php' %}
{% set section1=false %}
{% set section2=true %}
{% include 'request/block.php' %}
{% include 'wait/block.php' %}
{% set section2=false %}
{% set section3=true %}
{% include 'request/block.php' %}
{% include 'specialty/block.php' %}
{% include 'organizer/block.php' %}
{% include 'diplom-1/block.php' %}
{% set section3=false %}
{% set section4=true %}
{% include 'request/block.php' %}
{% include 'diplom-2/block.php' %}
{% include 'document/block.php' %}
{% set section4=false %}
{% set section5=true %}
{% include 'request/block.php' %}
{% include 'footer/block.php' %}
{% endblock %}
