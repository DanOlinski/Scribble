
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

    // Resize canvas to fit the screen
    function resizeCanvas() {
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resizeCanvas);
    resizeCanvas();

    let drawing = false;
    let lastX = 0;
    let lastY = 0;

    // Start drawing
    function startDrawing(event) {
      drawing = true;
      const touch = event.touches[0];
      lastX = touch.clientX;
      lastY = touch.clientY;
    }

    // Draw on canvas
    function draw(event) {
      if (!drawing) return;

      const touch = event.touches[0];
      const currentX = touch.clientX;
      const currentY = touch.clientY;

      ctx.beginPath();
      ctx.moveTo(lastX, lastY);
      ctx.lineTo(currentX, currentY);
      ctx.strokeStyle = 'black'; // Set line color
      ctx.lineWidth = 2; // Set line thickness
      ctx.stroke();

      lastX = currentX;
      lastY = currentY;
    }

    // Stop drawing
    function stopDrawing() {
      drawing = false;
    }

    // Event listeners for touch events
    canvas.addEventListener('touchstart', startDrawing);
    canvas.addEventListener('touchmove', draw);
    canvas.addEventListener('touchend', stopDrawing);
    canvas.addEventListener('touchcancel', stopDrawing);

    // Prevent scrolling on touch devices while drawing
    document.body.addEventListener('touchstart', (e) => e.preventDefault(), { passive: false });
    document.body.addEventListener('touchmove', (e) => e.preventDefault(), { passive: false });
 

