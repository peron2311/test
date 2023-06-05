@extends('layouts.default')

@section('title', 'Tree View')

@push('css')
  <link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/jstree/dist/jstree.min.js"></script>
	<script src="/assets/js/demo/ui-tree.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Tree View</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Tree View <small>header small text goes here...</small></h1>
	<!-- END page-header -->
				
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-1">
				<div class="panel-heading">
					<h4 class="panel-title">Default Tree</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div id="jstree-default">
						<ul>
							<li data-jstree='{"opened":true}' >
								Root node 1
								<ul>
									<li data-jstree='{"opened":true, "selected":true }'>Initially Selected</li>
									<li>Folder 1</li>
									<li>Folder 2</li>
									<li>Folder 3</li>
									<li data-jstree='{"opened":true}' >
										Initially open
										<ul>
											<li data-jstree='{"disabled":true}' >Disabled node</li>
											<li>Another node</li>
										</ul>
									</li>
									<li data-jstree='{ "icon" : "fab fa-adobe fa-lg text-danger" }'>custom icon class (fontawesome)</li>
									<li data-jstree='{ "icon" : "fa fa-link fa-lg text-primary" }'><a href="http://www.jstree.com">Clickable link node</a></li>
								</ul>
							</li>
							<li>Root node 2</li>
						</ul>
					</div>
				</div>
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/jstree/dist/jstree.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;div id="jstree-default"&gt;
  &lt;ul&gt;
    &lt;li data-jstree='{"opened":true}' &gt;
      Root node 1
      &lt;ul&gt;
        &lt;li data-jstree='{"opened":true, "selected":true }'&gt;Initially Selected&lt;/li&gt;
        &lt;li&gt;Folder 1&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;script&gt;
  $("#jstree-default").jstree({
    "plugins": ["types"],
    "core": {
      "themes": { "responsive": false  }            
      },
    "types": {
      "default": { "icon": "fa fa-folder text-warning fa-lg" },
      "file": { "icon": "fa fa-file text-dark fa-lg" }
    }
  });
&lt;/script&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-2">
				<div class="panel-heading">
					<h4 class="panel-title">Checkable Tree</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div id="jstree-checkable"></div>
				</div>
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/jstree/dist/jstree.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;div id="jstree-checkable"&gt;&lt;/div&gt;

&lt;script&gt;
  $("#jstree-checkable").jstree({
    "plugins": ["wholerow", "checkbox", "types"],
    "core": {
      "themes": { "responsive": false },    
      "data": [{
        "text": "Same but with checkboxes",
        "children": [{
          "text": "initially selected",
          "state": { "selected": true }
        }, {
          "text": "Folder 1"
        }]
      ]},
      "Root node 2"
    ]},
    "types": {
      "default": { "icon": "fa fa-folder text-primary fa-lg" },
      "file": { "icon": "fa fa-file text-success fa-lg" }
    }
  });
&lt;/script&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->

	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-3">
				<div class="panel-heading">
					<h4 class="panel-title">Contextual Menu with Drag & Drop</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="alert alert-info rounded-0 mb-0">
					<i class="fa fa-info-circle fa-fw"></i> All the opened & selected nodes will be saved in the user's browser.
				</div>
				<div class="panel-body">
					<div id="jstree-drag-and-drop"></div>
				</div>
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/jstree/dist/jstree.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;div id="jstree-drag-and-drop"&gt;&lt;/div&gt;

&lt;script&gt;
  $("#jstree-drag-and-drop").jstree({
    "plugins": ["contextmenu", "dnd", "state", "types"],
    "core": {
      "themes": { "responsive": false },
      "check_callback": true,
      "data": [{
          "text": "Parent Node",
          "children": [{
            "text": "Initially selected",
            "state": { "selected": true }
          }, {
            "text": "Folder 1"
          }
        },
        "Another Node"
      ]
    },
    "types": {
      "default": { "icon": "fa fa-folder text-warning fa-lg" },
      "file": { "icon": "fa fa-file text-warning fa-lg" }
    },
    "state": { "key": "demo2"  }
  });
&lt;/script&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-4">
				<div class="panel-heading">
					<h4 class="panel-title">Ajax Tree with Drag & Drop</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="alert alert-info rounded-0 mb-0">
					<i class="fa fa-info-circle fa-fw"></i> The tree nodes are loaded from date_root.json via ajax.
				</div>
				<div class="panel-body">
					<div id="jstree-ajax"></div>
				</div>
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/jstree/dist/themes/default/style.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/jstree/dist/jstree.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;div id="jstree-ajax"&gt;&lt;/div&gt;

&lt;script&gt;
  $("#jstree-ajax").jstree({
    "plugins": ["dnd", "state", "types"],
    "core": {
      "themes": { "responsive": false },
      "check_callback": true,
      "data": {
        "url": function(node) {
          return node.id === "#" ? "/assets/js/demo/json/data_root.json" : "/assets/js/demo/json/" + node.original.file;
        },
        "data": function(node) {
          return {
            "id": node.id
          };
        },
        "dataType": "json"
      }
    },
    "types": {
      "default": { "icon": "fa fa-folder text-warning fa-lg" },
      "file": { "icon": "fa fa-file text-warning fa-lg" }
    }
  });
&lt;/script&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->
@endsection