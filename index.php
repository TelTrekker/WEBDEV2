<!DOCTYPE html>
<html>

<script>
    // Example #1
    // Synchronous
    console.log(1);
    console.log(2);
    console.log(3);
    console.log(4);

    // Example #2
    // Asynchronous function
    // console.log(1);
    // console.log(2);

    // setTimeout(() => {
    //     console.log('callback function is fired');
    // });

    // console.log(3);
    // console.log(4);

    // Example #3
    // Http Requests
    // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/readyState
    // const request = new XMLHttpRequest();

    // request.addEventListener('readystatechange', () => {
    //     console.log(request, request.readyState);

    //     if (request.readyState === 4) {
    //         console.log(request.responseText);
    //     }
    // });

    // request.open('GET', 'https://jsonplaceholder.typicode.com/todos');
    // request.send();

    // Example #4
    // Status Codes
    // https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
    // const request = new XMLHttpRequest();

    // request.addEventListener('readystatechange', () => {
    //     if (request.readyState === 4 && request.status === 200) {
    //         console.log(request, request.readyState);
    //     } else if (request.readyState === 4) {
    //         console.log('could not fetch the data');
    //     }
    // });

    // request.open('GET', 'https://jsonplaceholder.typicode.com/todos');
    // request.send();

    // Example #5
    // Callback
    // const getTodos = (callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             callback(undefined, request.responseText);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch data', undefined);
    //         }
    //     });

    //     request.open('GET', 'https://jsonplaceholder.typicode.com/todos');
    //     request.send();
    // }

    // console.log(1);
    // console.log(2);

    // getTodos((err, data) => {
    //     console.log('callback fired');
    //     if (err) {
    //         console.log(err);
    //     } else {
    //         console.log(data);
    //     }
    // });

    // console.log(3);
    // console.log(4);

    // Example #6
    // JSON data
    // const getTodos = (callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             const data = JSON.parse(request.responseText);
    //             callback(undefined, data);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch data', undefined);
    //         }
    //     });

    //     request.open('GET', 'todos/todos1.json');
    //     request.send();
    // }

    // getTodos((err, data) => {
    //     console.log('callback fired');
    //     if (err) {
    //         console.log(err);
    //     } else {
    //         console.log(data);
    //     }
    // });

    // Example #7
    // Callbacl Hell or Pyramid of Doom
    // const getTodos = (resource, callback) => {
    //     const request = new XMLHttpRequest();

    //     request.addEventListener('readystatechange', () => {
    //         if (request.readyState === 4 && request.status === 200) {
    //             const data = JSON.parse(request.responseText);
    //             callback(undefined, data);
    //         } else if (request.readyState === 4) {
    //             callback('could not fetch data', undefined);
    //         }
    //     });

    //     request.open('GET', resource);
    //     request.send();
    // }

    // getTodos('todos/todos1.json', (err, data) => {
    //     console.log(data);
    //     getTodos('todos/todos2.json', (err, data) => {
    //         console.log(data);
    //         getTodos('todos/todos3.json', (err, data) => {
    //             console.log(data);
    //         });
    //     });
    // });

    // Example #8
    // Promises
    // const getTodos = (resource, callback) => {

    //     return new Promise((resolve, reject) => {
    //         const request = new XMLHttpRequest();

    //         request.addEventListener('readystatechange', () => {
    //             if (request.readyState === 4 && request.status === 200) {
    //                 const data = JSON.parse(request.responseText);
    //                 resolve(data);
    //             } else if (request.readyState === 4) {
    //                 reject('could not fetch data');
    //             }
    //         });

    //         request.open('GET', resource);
    //         request.send();
    //     });
    // }

    // getTodos('todos/todos1.json').then(data => {
    //     console.log('promise resolved:', data);
    // }).catch(err => {
    //     console.log('promise rejected:', err);
    // });

    // Example #9
    // Chaining Promises
    // const getTodos = (resource, callback) => {

    //     return new Promise((resolve, reject) => {
    //         const request = new XMLHttpRequest();

    //         request.addEventListener('readystatechange', () => {
    //             if (request.readyState === 4 && request.status === 200) {
    //                 const data = JSON.parse(request.responseText);
    //                 resolve(data);
    //             } else if (request.readyState === 4) {
    //                 reject('could not fetch data');
    //             }
    //         });

    //         request.open('GET', resource);
    //         request.send();
    //     });
    // }

    // getTodos('todos/todos11.json').then(data => {
    //     console.log('promise 1 resolved:', data);
    //     return getTodos('todos/todos2.json');
    // }).then(data => {
    //     console.log('promise 2 resolved:', data);
    //     return getTodos('todos/todos3.json');
    // }).then(data => {
    //     console.log('promise 3 resolved:', data);
    // }).catch(err => {
    //     console.log('promise rejected:', err);
    // });

    // Example #10
    // Fetch API
    // fetch('todos/todos1.json').then(response => {
    //     console.log('resolved:', response);
    //     return data = response.json();
    // }).then(data => {
    //     console.log('data:', data);
    // }).catch(err => {
    //     console.log('rejected:', err);
    // });

    // Example #10
    // async and await
    // const getTodos = async () => {
    //     const response = await fetch('todos/todos1.json');
    //     const data = await response.json();

    //     return data;
    // }

    // console.log(1);
    // console.log(2);

    // getTodos().then(data => console.log('resolved:', data));

    // console.log(3);
    // console.log(4);

    // Example #11
    // Throwing Errors
    // const getTodos = async () => {
    //     const response = await fetch('todos/todos1.json');

    //     if (response.status !== 200) {
    //         throw new Error('cannot fetch the data');
    //     }

    //     const data = await response.json();

    //     return data;
    // }

    // getTodos()
    //     .then(data => console.log('resolved:', data))
    //     .catch(err => console.log('rejected:', err.message));
</script>

<body>

    <h1>Asynchronous Javascript</h1>

</body>

</html>