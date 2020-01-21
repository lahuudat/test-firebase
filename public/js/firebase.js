const firebaseConfig = {
    apiKey: "AIzaSyBNi3xMzcxUaIFuEf0Vj9krW5Z5jLHRZwc",
    authDomain: "test-firebase-3ed55.firebaseapp.com",
    databaseURL: "https://test-firebase-3ed55.firebaseio.com",
    projectId: "test-firebase-3ed55",
    storageBucket: "test-firebase-3ed55.appspot.com",
    messagingSenderId: "672754983752",
    appId: "1:672754983752:web:44f9d5669832d488f7c97d",
    measurementId: "G-Q8X6Z02JBB"
  };

  
firebase.initializeApp (firebaseConfig);

const messaging = firebase.messaging();

messaging
  .requestPermission()
  .then(function () {
    console.log("Notification permission granted.");
    return messaging.getToken()

  }).then(function(token) {
      console.log(token);
    }).catch(function(err) {
        console.log("Unable to get permission to notify", err);
    });


messaging.onMessage((payload) => {
    console.log(payload);
})