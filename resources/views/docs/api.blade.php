<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="php-apidoc - apid documenation generator">
    <meta name="author" content="Calin Rada">
    <title>Sample API</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body      { padding-top: 70px; margin-bottom: 15px; }
        .tab-pane { padding-top: 10px; }
        .mt0      { margin-top: 0px; }
        .footer   { font-size: 12px; color: #666; }
        .label    { display: inline-block; min-width: 65px; padding: 0.3em 0.6em 0.3em; }
        .string   { color: green; }
        .number   { color: darkorange; }
        .boolean  { color: blue; }
        .null     { color: magenta; }
        .key      { color: red; }
        .popover  { max-width: 400px; max-height: 400px; overflow-y: auto;}
        .nav-tabs>li:nth-child(2) {
            display: none
        }
        .postman-run-button {
            vertical-align: middle;
            margin-left: 11px;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <a href="https://github.com/zulfajuniadi/sampleapi"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 1031;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"></a>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sample API</a>
        </div>
        <div class="navbar-collapse collapse hidden">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    Api key: <a href="javascript:void(0);" class="tooltipP" data-toggle="tooltip" title="Api key header with api key (key) and api key value (value) "><span class="glyphicon glyphicon-info-sign"></span></a>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="key" id="apikey_key">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="value" id="apikey_value">
                </div>
                <div class="form-group" style="margin-left: 10px;">
                    Basic Auth: <a href="javascript:void(0);" class="tooltipP" data-toggle="tooltip" title="If needed"><span class="glyphicon glyphicon-info-sign"></span></a>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="Username" id="basic_auth_username">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control input-sm" placeholder="Password" id="basic_auth_password">
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-sm tooltipP" data-toggle="tooltip" title="Save API key and Basic Auth data in localstorage" id="save_auth_data">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>
                    </button>
                </div>
            </form>
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12" style="position: relative;">
                <h2>
                    Api URL
                    <div class="postman-run-button"
                    data-postman-action="collection/import"
                    data-postman-var-1="b24536e45727d1e82614"
                    data-postman-param="env%5BSample%20API%20-%20Production%5D=W3sia2V5Ijoic2VydmVyIiwidmFsdWUiOiJodHRwczovL3NhbXBsZWFwaS5kZW1vLnJvY2tzL2FwaS92MSIsInR5cGUiOiJ0ZXh0IiwiZW5hYmxlZCI6dHJ1ZX0seyJrZXkiOiJ0b2tlbiIsInZhbHVlIjoiQmVhcmVyIGV5SjBlWEFpT2lKS1YxUWlMQ0poYkdjaU9pSklVekkxTmlKOS5leUp6ZFdJaU9qRXNJbWx6Y3lJNkltaDBkSEJ6T2x3dlhDOXpZVzF3YkdWaGNHa3VaR1Z0Ynk1eWIyTnJjMXd2WVhCcFhDOTJNVnd2WVhWMGFGd3ZiRzluYVc0aUxDSnBZWFFpT2pFME5UZzNORGMzTkRFc0ltVjRjQ0k2TVRRNU1ESTRNemMwTVN3aWJtSm1Jam94TkRVNE56UTNOelF4TENKcWRHa2lPaUl5T1RVek9HRmpNV015WVRCa056QXhZemM0TURCaE0ySTBZalZoTURFNU5pSjkuQ0N2dUY2bU43NnI1MDk3ZkpMdEY5bzFhRFhQcWtybDkxaEZFaEliSU5JNCIsInR5cGUiOiJ0ZXh0IiwiZW5hYmxlZCI6dHJ1ZX1d"></div>
                    <script type="text/javascript">
                      (function (p,o,s,t,m,a,n) {
                        !p[s] && (p[s] = function () { (p[t] || (p[t] = [])).push(arguments); });
                        !o.getElementById(s+t) && o.getElementsByTagName("head")[0].appendChild((
                          (n = o.createElement("script")),
                          (n.id = s+t), (n.async = 1), (n.src = m), n
                        ));
                      }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
                    </script>
                </h2>
                <input id="apiUrl" type="text" class="form-control input-sm" value="https://sampleapi.demo.rocks">
            </div>
        </div>
        <hr>
        <div class="panel-group" id="accordion">
            <h2>Authentication</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion0" href="#collapseOne0"> /api/v1/auth/login</a>
        </h4>
    </div>
    <div id="collapseOne0" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab0">
                <li class="active"><a href="#info0" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox0" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample0" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info0">
                    <div class="well">
                    Authenticates a user using email and password. If authentication is successful, the API will return a json object with a token attribute. You must supply the token as a request header 'Authorization' attribute with the format: 'Bearer __token__' for API calls requiring authentication.
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Must be application/json</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>email</td>
    <td>string</td>
    <td>Yes</td>
    <td>User's email</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>User's password</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox0">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/auth/login" method="POST" name="form0" id="form0">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="email" placeholder="email" name="email">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="password" placeholder="password" name="password">
</div>
    <button type="submit" class="btn btn-success send" rel="0">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers0"></pre>
                                <pre id="response0"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample0">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header0">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response0">{
  'token':'eyJ0eXAi...KMxwwexXrY8GdU'
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1"> /api/v1/auth/register</a>
        </h4>
    </div>
    <div id="collapseOne1" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab1">
                <li class="active"><a href="#info1" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox1" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample1" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info1">
                    <div class="well">
                    Registers a new user
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>

<tr>
    <td>Content-Type</td>
    <td>string</td>
    <td>Yes</td>
    <td>application/x-www-form-urlencoded</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>name</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's name</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's password</td>
</tr>

<tr>
    <td>email</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's email</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox1">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Content-Type" name="Content-Type">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/auth/register" method="POST" name="form1" id="form1">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="name" placeholder="name" name="name">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="password" placeholder="password" name="password">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="email" placeholder="email" name="email">
</div>
    <button type="submit" class="btn btn-success send" rel="1">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers1"></pre>
                                <pre id="response1"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample1">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header1">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response1">{
   'name': 'Zulfa Juniadi',
   'email': 'zulfajuniadi3@gmail.com',
   'updated_at': '2016-03-23 15:01:29',
   'created_at': '2016-03-23 15:01:29',
   'id': 3
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div><h2>Users</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2"> /api/v1/users</a>
        </h4>
    </div>
    <div id="collapseOne2" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab2">
                <li class="active"><a href="#info2" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox2" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample2" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info2">
                    <div class="well">
                    Lists paginated Users
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>page</td>
    <td>integer</td>
    <td>No</td>
    <td>Pagination page</td>
</tr>

<tr>
    <td>per_page</td>
    <td>integer</td>
    <td>No</td>
    <td>Per page in pagination</td>
</tr>

<tr>
    <td>name</td>
    <td>string</td>
    <td>No</td>
    <td>Filters tasks like %name%</td>
</tr>

<tr>
    <td>email</td>
    <td>string</td>
    <td>No</td>
    <td>Filters tasks like %email%</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox2">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/users" method="GET" name="form2" id="form2">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="page" placeholder="page" name="page">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="per_page" placeholder="per_page" name="per_page">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="name" placeholder="name" name="name">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="email" placeholder="email" name="email">
</div>
    <button type="submit" class="btn btn-success send" rel="2">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers2"></pre>
                                <pre id="response2"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample2">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header2">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response2"> {
   'total': 1,
   'per_page': 15,
   'current_page': 1,
   'last_page': 1,
   'next_page_url': null,
   'prev_page_url': null,
   'from': 1,
   'to': 1,
   'data': [
     {
       'id': 1,
       'name': 'Zulfa Juniadi',
       'email': 'zulfajuniadi@gmail.com',
       'created_at': '2016-03-23 04:06:04',
       'updated_at': '2016-03-23 04:06:04'
     }
   ]
    }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3"> /api/v1/users</a>
        </h4>
    </div>
    <div id="collapseOne3" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab3">
                <li class="active"><a href="#info3" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox3" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample3" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info3">
                    <div class="well">
                    Create a new user
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>

<tr>
    <td>Content-Type</td>
    <td>string</td>
    <td>Yes</td>
    <td>application/x-www-form-urlencoded</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>name</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's name</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's password</td>
</tr>

<tr>
    <td>email</td>
    <td>string</td>
    <td>Yes</td>
    <td>The user's email</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox3">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Content-Type" name="Content-Type">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/users" method="POST" name="form3" id="form3">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="name" placeholder="name" name="name">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="password" placeholder="password" name="password">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="email" placeholder="email" name="email">
</div>
    <button type="submit" class="btn btn-success send" rel="3">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers3"></pre>
                                <pre id="response3"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample3">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header3">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response3">{
   'name': 'Zulfa Juniadi',
   'email': 'zulfajuniadi3@gmail.com',
   'updated_at': '2016-03-23 15:01:29',
   'created_at': '2016-03-23 15:01:29',
   'id': 3
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4"> /api/v1/users/{user_id}</a>
        </h4>
    </div>
    <div id="collapseOne4" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab4">
                <li class="active"><a href="#info4" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox4" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample4" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info4">
                    <div class="well">
                    Displays a user with tasks array
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>user_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the user</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox4">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/users/{user_id}" method="GET" name="form4" id="form4">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="user_id" placeholder="user_id" name="user_id">
</div>
    <button type="submit" class="btn btn-success send" rel="4">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers4"></pre>
                                <pre id="response4"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample4">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header4">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response4">{
   'id': 1,
   'name': 'Zulfa Juniadi',
   'email': 'zulfajuniadi@gmail.com',
   'created_at': '2016-03-23 04:06:04',
   'updated_at': '2016-03-23 04:06:04',
   'tasks': [
     {
       'id': 1,
       'user_id': 1,
       'title': 'Buy some milk',
       'is_done': 0,
       'created_at': '2016-03-23 14:33:25',
       'updated_at': '2016-03-23 14:33:25'
     }
   ]
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion5" href="#collapseOne5"> /api/v1/users/{user_id}</a>
        </h4>
    </div>
    <div id="collapseOne5" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab5">
                <li class="active"><a href="#info5" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox5" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample5" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info5">
                    <div class="well">
                    Updates an existing user
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>

<tr>
    <td>Content-Type</td>
    <td>string</td>
    <td>Yes</td>
    <td>application/x-www-form-urlencoded</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>user_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the user</td>
</tr>

<tr>
    <td>name</td>
    <td>string</td>
    <td>No</td>
    <td>The user's name</td>
</tr>

<tr>
    <td>password</td>
    <td>string</td>
    <td>No</td>
    <td>The user's password</td>
</tr>

<tr>
    <td>email</td>
    <td>string</td>
    <td>No</td>
    <td>The user's email</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox5">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Content-Type" name="Content-Type">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/users/{user_id}" method="PUT" name="form5" id="form5">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="user_id" placeholder="user_id" name="user_id">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="name" placeholder="name" name="name">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="password" placeholder="password" name="password">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="email" placeholder="email" name="email">
</div>
    <button type="submit" class="btn btn-success send" rel="5">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers5"></pre>
                                <pre id="response5"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample5">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header5">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response5">{
   'id': 1,
   'name': 'Jackie Chan',
   'email': 'zulfajuniadi@gmail.com',
   'created_at': '2016-03-23 04:06:04',
   'updated_at': '2016-03-23 15:06:08'
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion6" href="#collapseOne6"> /api/v1/users/{user_id}</a>
        </h4>
    </div>
    <div id="collapseOne6" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab6">
                <li class="active"><a href="#info6" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox6" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample6" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info6">
                    <div class="well">
                    Deletes a user
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>user_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the user</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox6">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/users/{user_id}" method="DELETE" name="form6" id="form6">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="user_id" placeholder="user_id" name="user_id">
</div>
    <button type="submit" class="btn btn-success send" rel="6">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers6"></pre>
                                <pre id="response6"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample6">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header6">HTTP 200 OK</pre>
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div><h2>Tasks</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion7" href="#collapseOne7"> /api/v1/tasks</a>
        </h4>
    </div>
    <div id="collapseOne7" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab7">
                <li class="active"><a href="#info7" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox7" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample7" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info7">
                    <div class="well">
                    Lists paginated User's tasks
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>page</td>
    <td>integer</td>
    <td>No</td>
    <td>Pagination page</td>
</tr>

<tr>
    <td>per_page</td>
    <td>integer</td>
    <td>No</td>
    <td>Per page in pagination</td>
</tr>

<tr>
    <td>title</td>
    <td>string</td>
    <td>No</td>
    <td>Filters tasks like %title%</td>
</tr>

<tr>
    <td>is_done</td>
    <td>boolean</td>
    <td>No</td>
    <td>Filters tasks by is_done</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox7">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/tasks" method="GET" name="form7" id="form7">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="page" placeholder="page" name="page">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="per_page" placeholder="per_page" name="per_page">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="title" placeholder="title" name="title">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="is_done" placeholder="is_done" name="is_done">
</div>
    <button type="submit" class="btn btn-success send" rel="7">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers7"></pre>
                                <pre id="response7"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample7">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header7">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response7">{
    'total': 1,
    'per_page': 15,
    'current_page': 1,
    'last_page': 1,
    'next_page_url': null,
    'prev_page_url': null,
    'from': 1,
    'to': 1,
    'data': [
      {
        'id': 1,
        'user_id': 1,
        'title': 'Buy some eggs',
        'is_done': 0,
        'created_at': '2016-03-23 12:46:16',
        'updated_at': '2016-03-23 12:46:16'
      }
    ]
  }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-primary">POST</span> <a data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8"> /api/v1/tasks</a>
        </h4>
    </div>
    <div id="collapseOne8" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab8">
                <li class="active"><a href="#info8" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox8" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample8" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info8">
                    <div class="well">
                    Create a new task
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>

<tr>
    <td>Content-Type</td>
    <td>string</td>
    <td>Yes</td>
    <td>application/x-www-form-urlencoded</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>title</td>
    <td>string</td>
    <td>Yes</td>
    <td>The task title</td>
</tr>

<tr>
    <td>is_done</td>
    <td>boolean</td>
    <td>No</td>
    <td>Whether the task is done</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox8">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Content-Type" name="Content-Type">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/tasks" method="POST" name="form8" id="form8">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="title" placeholder="title" name="title">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="is_done" placeholder="is_done" name="is_done">
</div>
    <button type="submit" class="btn btn-success send" rel="8">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers8"></pre>
                                <pre id="response8"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample8">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header8">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response8">{
    'id': 2,
    'user_id': 1,
    'title': 'Buy some milk',
    'is_done': 1,
    'created_at': '2016-03-23 12:46:16',
    'updated_at': '2016-03-23 12:46:16'
  }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-success">GET</span> <a data-toggle="collapse" data-parent="#accordion9" href="#collapseOne9"> /api/v1/tasks/{task_id}</a>
        </h4>
    </div>
    <div id="collapseOne9" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab9">
                <li class="active"><a href="#info9" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox9" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample9" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info9">
                    <div class="well">
                    Displays a task
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>task_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the task</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox9">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/tasks/{task_id}" method="GET" name="form9" id="form9">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="task_id" placeholder="task_id" name="task_id">
</div>
    <button type="submit" class="btn btn-success send" rel="9">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers9"></pre>
                                <pre id="response9"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample9">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header9">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response9">{
   'id': 4,
   'user_id': 1,
   'title': 'Buy some bread',
   'is_done': 1,
   'created_at': '2016-03-23 14:28:42',
   'updated_at': '2016-03-23 14:28:42',
   'user': {
     'id': 1,
     'name': 'Zulfa Juniadi',
     'email': 'zulfajuniadi@gmail.com',
     'created_at': '2016-03-23 04:06:04',
     'updated_at': '2016-03-23 04:06:04'
   }
 }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-warning">PUT</span> <a data-toggle="collapse" data-parent="#accordion10" href="#collapseOne10"> /api/v1/tasks/{task_id}</a>
        </h4>
    </div>
    <div id="collapseOne10" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab10">
                <li class="active"><a href="#info10" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox10" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample10" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info10">
                    <div class="well">
                    Updates an existing task
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>

<tr>
    <td>Content-Type</td>
    <td>string</td>
    <td>Yes</td>
    <td>application/x-www-form-urlencoded</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>task_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the task</td>
</tr>

<tr>
    <td>title</td>
    <td>string</td>
    <td>Yes</td>
    <td>The task title</td>
</tr>

<tr>
    <td>is_done</td>
    <td>boolean</td>
    <td>No</td>
    <td>Whether the task is done</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox10">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Content-Type" placeholder="Content-Type" name="Content-Type">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/tasks/{task_id}" method="PUT" name="form10" id="form10">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="task_id" placeholder="task_id" name="task_id">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="title" placeholder="title" name="title">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="is_done" placeholder="is_done" name="is_done">
</div>
    <button type="submit" class="btn btn-success send" rel="10">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers10"></pre>
                                <pre id="response10"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample10">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header10">HTTP 200 OK</pre>
                            

<hr>
<pre id="sample_response10">{
    'id': 2,
    'user_id': 1,
    'title': 'Buy some milk',
    'is_done': 0,
    'created_at': '2016-03-23 12:46:16',
    'updated_at': '2016-03-23 12:46:16'
  }</pre>
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <span class="label label-danger">DELETE</span> <a data-toggle="collapse" data-parent="#accordion11" href="#collapseOne11"> /api/v1/tasks/{task_id}</a>
        </h4>
    </div>
    <div id="collapseOne11" class="panel-collapse collapse">
        <div class="panel-body">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="php-apidoctab11">
                <li class="active"><a href="#info11" data-toggle="tab">Info</a></li>
                <li><a href="#sandbox11" data-toggle="tab">Sandbox</a></li>
                <li><a href="#sample11" data-toggle="tab">Sample output</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div class="tab-pane active" id="info11">
                    <div class="well">
                    Deletes a task
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Headers</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>Accept</td>
    <td>string</td>
    <td>Yes</td>
    <td>Only accepts application/json</td>
</tr>

<tr>
    <td>Authorization</td>
    <td>string</td>
    <td>Yes</td>
    <td>Token in format Bearer __token__ obtained from login API</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Parameters</strong></div>
                      <div class="panel-body">
                        
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Required</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        
<tr>
    <td>task_id</td>
    <td>integer</td>
    <td>Yes</td>
    <td>ID of the task</td>
</tr>
    </tbody>
</table>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading"><strong>Body</strong></div>
                      <div class="panel-body">
                        
                      </div>
                    </div>
                </div><!-- #info -->

                <div class="tab-pane" id="sandbox11">
                    <div class="row">
                        <div class="col-md-12">
                        
        <div class="col-md-6">
    Headers
    <hr/>
    <div class="headers">
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="Accept" placeholder="Accept" name="Accept">
</div>

<div class="form-group">
    <input type="text" class="form-control input-sm" id="Authorization" placeholder="Authorization" name="Authorization">
</div>
    </div>
    </div>
    <div class="col-md-6">
<form enctype="application/x-www-form-urlencoded" role="form" action="/api/v1/tasks/{task_id}" method="DELETE" name="form11" id="form11">
    
    Parameters
    <hr/>
    
<div class="form-group">
    <input type="text" class="form-control input-sm" id="task_id" placeholder="task_id" name="task_id">
</div>
    <button type="submit" class="btn btn-success send" rel="11">Send</button>
</form></div>
                        </div>
                        <div class="col-md-12">
                            Response
                            <hr>
                            <div class="col-md-12" style="overflow-x:auto">
                                <pre id="response_headers11"></pre>
                                <pre id="response11"></pre>
                            </div>
                        </div>
                    </div>
                </div><!-- #sandbox -->

                <div class="tab-pane" id="sample11">
                    <div class="row">
                        <div class="col-md-12">
                            
<pre id="sample_resp_header11">HTTP 200 OK</pre>
                            
                        </div>
                    </div>
                </div><!-- #sample -->

            </div><!-- .tab-content -->
        </div>
    </div>
</div>
        </div>
        <hr>

        <div class="row mt0 footer">
            <div class="col-md-6" align="left">
                Generated on 2016-03-23, 15:56:53
            </div>
            <div class="col-md-6" align="right">
                <a href="https://github.com/calinrada/php-apidoc" target="_blank">php-apidoc v 1.3.4</a>
            </div>
        </div>

    </div> <!-- /container -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    function syntaxHighlight(json) {
        if (typeof json != 'string') {
            json = JSON.stringify(json, undefined, 2);
        }
        json = json.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
        return json.replace(/("(\\u[a-zA-Z0-9]{4}|\\[^u]|[^\\"])*"(\s*:)?|\b(true|false|null)\b|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)/g, function(match) {
            var cls = 'number';
            if (/^"/.test(match)) {
                if (/:$/.test(match)) {
                    cls = 'key';
                } else {
                    cls = 'string';
                }
            } else if (/true|false/.test(match)) {
                cls = 'boolean';
            } else if (/null/.test(match)) {
                cls = 'null';
            }
            return '<span class="' + cls + '">' + match + '</span>';
        });
    }

    var storage = (function() {
        var uid = new Date;
        var storage;
        var result;
        try {
            (storage = window.localStorage).setItem(uid, uid);
            result = storage.getItem(uid) == uid;
            storage.removeItem(uid);
            return result && storage;
        } catch (exception) {}
    }());

    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if(!this.value) {
                return;
            }
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

    $(document).ready(function() {

        if (storage) {
            $('#basic_auth_username').val(storage.getItem('basicAuthUsername'));
            $('#basic_auth_password').val(storage.getItem('basicAuthPassword'));
            $('#apikey_key').val(storage.getItem('apiKey'));
            $('#apikey_value').val(storage.getItem('apiKeyValue'));
        }

        $('#php-apidoctab a').click(function(e) {
            e.preventDefault()
            $(this).tab('show')
        });

        $('.tooltipP').tooltip({
            placement: 'bottom'
        });

        $('code[id^=response]').hide();

        $.each($('pre[id^=sample_response],pre[id^=sample_post_body]'), function() {
            if ($(this).html() == 'NA') {
                return;
            }
            var str = JSON.stringify(JSON.parse($(this).html().replace(/'/g, '"')), undefined, 2);
            $(this).html(syntaxHighlight(str));
        });

        $("[data-toggle=popover]").popover({placement:'right'});

        $('body').on('shown.bs.popover', function() {
            var $sample = $(this).find(".popover-content");
            if ($sample.html() == 'NA') {
                return;
            }
            var str = JSON.stringify(JSON.parse($sample.html().replace(/'/g, '"')), undefined, 2);
            $sample.html('<pre>' + syntaxHighlight(str) + '</pre>');
        });

        $('body').on('click', '#save_auth_data', function(e) {
            if (storage) {
                storage.setItem('basicAuthUsername', $('#basic_auth_username').val());
                storage.setItem('basicAuthPassword', $('#basic_auth_password').val());
                storage.setItem('apiKey', $('#apikey_key').val());
                storage.setItem('apiKeyValue', $('#apikey_value').val());
            } else {
                alert('Your browser does not support local storage');
            }
        });

        $('body').on('click', '.send', function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            //added /g to get all the matched params instead of only first
            var matchedParamsInRoute = $(form).attr('action').match(/[^{]+(?=\})/g);
            var theId = $(this).attr('rel');
            //keep a copy of action attribute in order to modify the copy
            //instead of the initial attribute
            var url = $(form).attr('action');

            //get form serialized data in order to remove matchedParams
            var serializedData = $(form).serializeObject();

            var index, key, value;

            if(matchedParamsInRoute) {
                for (index = 0; index < matchedParamsInRoute.length; ++index) {
                    try {
                        key = matchedParamsInRoute[index];
                        value = serializedData[key];
                        if (typeof value == "undefined") value ="";
                        url = url.replace("{" + key + "}", value);
                        delete serializedData[key];
                    } catch (err) {
                        console.log(err);
                    }
                }
            }

            var st_headers = {};

            var basicAuthUsername = $('#basic_auth_username').val();
            var basicAuthPassword = $('#basic_auth_password').val();
            var apiKey = $('#apikey_key').val();
            var apiKeyValue = $('#apikey_value').val();

            if(apiKey.length > 0 && apiKeyValue.length > 0) {
                st_headers[apiKey] = apiKeyValue;
            }

            if (basicAuthUsername != '' && basicAuthPassword != '') {
                st_headers['Authorization'] = "Basic " + btoa(basicAuthUsername + ":" + basicAuthPassword);
            }

            $("#sandbox" + theId + " .headers input[type=text]").each(function() {
                val = $(this).val();
                if(val.length > 0) {
                    st_headers[$(this).prop('name')] = val;
                }
            });

            $.ajax({
                url: $('#apiUrl').val() + url,
                data: serializedData,
                type: $(form).attr('method') + '',
                dataType: 'json',
                headers: st_headers,
                success: function(data, textStatus, xhr) {
                    if (typeof data === 'object') {
                        var str = JSON.stringify(data, null, 2);
                        $('#response' + theId).html(syntaxHighlight(str));
                    } else {
                        $('#response' + theId).html(data);
                    }
                    $('#response_headers' + theId).html('HTTP ' + xhr.status + ' ' + xhr.statusText + '<br/><br/>' + xhr.getAllResponseHeaders());
                    $('#response' + theId).show();
                },
                error: function(xhr, textStatus, error) {
                    var str = JSON.stringify($.parseJSON(xhr.responseText), null, 2);
                    $('#response_headers' + theId).html('HTTP ' + xhr.status + ' ' + xhr.statusText + '<br/><br/>' + xhr.getAllResponseHeaders());
                    $('#response' + theId).html(syntaxHighlight(str));
                    $('#response' + theId).show();

                }
            });
            return false;
        });
    });
    </script>
</body>
</html>
