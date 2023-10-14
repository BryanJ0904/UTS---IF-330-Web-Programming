document.addEventListener("DOMContentLoaded", function () {
    const quotes = document.getElementById("quotes");
    const author = document.getElementById("author");

    fetch(
        `https://api.api-ninjas.com/v1/quotes?category=success`,
        {
          headers: {
            "X-Api-Key": "qXXn1mOOW/pwoEWKnYI9Eg==8m9W26wDyl7dtv7q",
            "Content-Type": "application/json",
          },
        }
      )
        .then((response) => {
            if (!response.ok) {
                throw new Error(`Network response was not ok`);
            }
            return response.json();
        })
        .then((fetchedData) => {
            console.log((fetchedData[0].quote));
            quotes.textContent = `"${fetchedData[0].quote}"`;
            author.textContent = `- ${fetchedData[0].author}`;
            return fetchedData[0];
        })
        .catch((error) => {
          console.error(`Error fetching quotes`, error);
          return null;
        }
    );
});



  
  
  
  
  
  