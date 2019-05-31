# NNSS
Scanning the nevada national security site for tour dates and any updates.

The Nevada National Security Site is a hot spot for tours and radiation. Tours are offered, but they're tough to get into as the only way to hear about them is from a static HTML page with no ability to get alerts: https://www.nnss.gov/pages/PublicAffairsOutreach/NNSStours.html. In order to ensure that I got on the list, I built this script to scan for NNSS Tour listings. The script is simple and effectively looks for *any* page changes and then sends an email.

# Setup
* Get a PHP enabled server
* Update your email in the tour.php file
* The hash value in the conditional at line 10 in the tour.php file may also need to be updated (conditional value can be easily retrieved by just viewing the value with the compiled script)
* Host the file on the PHP enabled server
* Setup a cron job or similar to scan the page (I did every 15 minutes)

If the NNSS page updates, an email will then be dispatched to the email specified (you can add more emails if you'd like)

# Tips
* The dates for tours are always on Tuesdays and are usually consistent from year to year: https://web.archive.org/web/20180225093846/https://www.nnss.gov/pages/PublicAffairsOutreach/NNSStours.html
* Make sure to complete the Badging Form ahead of time (the dates are consistent, mentioned above)
* Draft the badging forms in an email and once the email trigger comes, your draft email will be all ready to go for submission

Following these tips allowed me to immediately submit a tour request after the alert email came in.