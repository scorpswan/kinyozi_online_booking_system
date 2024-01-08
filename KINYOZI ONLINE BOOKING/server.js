const express = require('express');
const http = require('http');
const socketIo = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

const bookings = []; // Store bookings in memory for this example

io.on('connection', (socket) => {
  console.log('A user connected');

  // Emit existing bookings to the connected client
  socket.emit('bookings', bookings);

  socket.on('newBooking', (newBooking) => {
    // Add the new booking to the array
    bookings.push(newBooking);

    // Broadcast the updated bookings to all connected clients
    io.emit('bookings', bookings);
  });

  socket.on('disconnect', () => {
    console.log('A user disconnected');
  });
});

server.listen(3000, () => {
  console.log('Server is running on port 3000');
});
