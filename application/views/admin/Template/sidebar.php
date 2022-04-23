<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
        <div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="index.html">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard</a>
        <div class="sb-sidenav-menuheading">Interface</div>
    <a class="nav-link collapsed" href="#" datatoggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>Layouts<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion"><nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="layoutstatic.html">Static Navigation</a>
<a class="nav-link" href="layoutsidenav-light.html">Light Sidenav</a>
</nav>
</div>
<a class="nav-link collapsed" href="#" datatoggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>Pages<div class="sb-sidenav-collapse-arrow"><i
class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" ariaexpanded="false" aria-controls="pagesCollapseAuth">
Authentication<div class="sb-sidenav-collapsearrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" dataparent="#sidenavAccordionPages">
<nav class="sb-sidenav-menunested nav">
<a class="nav-link" href="login.html">Login</a>
<a class="nav-link" href="register.html">Register</a>
<a class="nav-link" href="password.html">Forgot Password</a>
</nav>
</div>
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" ariaexpanded="false" aria-controls="pagesCollapseError">
Error
<div class="sb-sidenav-collapsearrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" dataparent="#sidenavAccordionPages">
<nav class="sb-sidenav-menunested nav">
<a class="nav-link" href="401.html">401 Page</a>
<a class="nav-link" href="404.html">404 Page</a>
<a class="nav-link" href="500.html">500 Page</a>
</nav>
</div>
</nav>
</div>
<div class="sb-sidenav-menuheading">Addons</div>
<a class="nav-link" href="charts.html">
<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
Charts
</a>
<a class="nav-link" href="tables.html">
<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
Tables
</a>
</div>
</div>
<div class="sb-sidenav-footer">
<div class="small">Logged in as:</div>
Start Bootstrap
</div>
</nav>
</div>
<div id="layoutSidenav_content">
</body>
</html>