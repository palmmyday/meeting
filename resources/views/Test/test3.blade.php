<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="http://cdn.alloyui.com/3.0.1/aui/aui-min.js"></script>
    <link href="http://cdn.alloyui.com/3.0.1/aui-css/css/bootstrap.min.css" rel="stylesheet"></link>
</head>
<body>
    <div id="myDiagramContainer">
        <div id="myDiagramBuilder"></div>
    </div>
    
</body>

<script>
    YUI().use(
  'aui-diagram-builder',
  function(Y) {
    var availableFields = [
      {
        iconClass: 'diagram-node-task-icon',
        label: 'Task',
        type: 'task'
      }
    ];

    new Y.DiagramBuilder(
      {
        availableFields: availableFields,
        boundingBox: '#myDiagramContainer',
        fields: [
          {
            name: 'StartNode',
            type: 'start',
            xy: [10, 10]
          }
        ],
        srcNode: '#myDiagramBuilder'
      }
    ).render();
  }
);
</script>
</html>