<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mode-viewerテスト</title>
    <!-- Import the component -->
    <script
      type="module"
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"
    ></script>
  </head>
  <body>
    <model-viewer
      src="./wp-content/themes/biz-vektor/ar//src/archive/model.gltf"
      ios-src="./wp-content/themes/biz-vektor/ar/src/PCmodel12346.usdz"
      alt="A 3D model"
      auto-rotate
      camera-controls
      ar
    ></model-viewer>
  </body>
</html>