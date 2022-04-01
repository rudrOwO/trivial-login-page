var testDiv = document.createElement("div");

document.getElementById("login").onclick = e => {
  fetch("./login_response.php", {
    headers: {
      "content-type": "application/x-www-form-urlencoded",
    },
    method: "POST",
    body: new URLSearchParams(
      new FormData(document.getElementById("form-container"))
    ),
  })
    .then(response => response.text())
    .then(message => {
      console.log(typeof message);
      testDiv.innerText = message;
      document.getElementById("top-container").appendChild(testDiv);
    });
};
