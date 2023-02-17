{% extends "default.php" %}

{% block version %}

{% endblock %}

{% block blocks %}
{% set IS_MAIN = false %}
{% set PROGRAM_BTN = true %}
{% set class = 'second' %}
{% include 'header/block.php' %}
{% include 'program-top/block.php' %}
{% include 'programs/block.php' %}

{% set class = 'outro' %}
{% include 'footer/block.php' %}
{% endblock %}
