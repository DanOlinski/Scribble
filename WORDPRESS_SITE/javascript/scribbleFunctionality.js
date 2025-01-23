
var canvas, ctx, flag = false,
    prevX = 0,
    currX = 0,
    prevY = 0,
    currY = 0,
    dot_flag = false;


//default chalk color
var x = "rgba(255, 255, 255, 0.70)",
    y = 8;



    const canvas = document.getElementById('drawingCanvas');
    const ctx = canvas.getContext('2d');

    // Resize the canvas to fit the screen
    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;

    // Utility function to get touch coordinates relative to the canvas
    function getTouchPos(event) {
      const rect = canvas.getBoundingClientRect();
      const touch = event.touches[0];
      return {
        x: touch.clientX - rect.left,
        y: touch.clientY - rect.top,
      };
    }

    // Start drawing
    function startDrawing(event) {
      isDrawing = true;
      const pos = getTouchPos(event);
      lastX = pos.x;
      lastY = pos.y;
    }

    // Draw on the canvas
    function draw(event) {
      if (!isDrawing) return;

      const pos = getTouchPos(event);
      ctx.beginPath();
      ctx.moveTo(lastX, lastY); // Start from the last position
      ctx.lineTo(pos.x, pos.y); // Draw to the current touch position
      ctx.strokeStyle = 'black'; // Set the line color
      ctx.lineWidth = 2; // Set the line width
      ctx.lineCap = 'round'; // Smooth line edges
      ctx.stroke();

      // Update the last position
      lastX = pos.x;
      lastY = pos.y;

      // Prevent scrolling while drawing
      event.preventDefault();
    }

    // Stop drawing
    function stopDrawing() {
      isDrawing = false;
    }

    // Event listeners for touch events
    canvas.addEventListener('touchstart', startDrawing);
    canvas.addEventListener('touchmove', draw);
    canvas.addEventListener('touchend', stopDrawing);
    canvas.addEventListener('touchcancel', stopDrawing);

    // Prevent the default scrolling behavior on touch devices
    document.body.addEventListener(
      'touchmove',
      (event) => event.preventDefault(),
      { passive: false }
    );
 

