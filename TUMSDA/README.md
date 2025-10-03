# TUMSDA Church Website

A simple PHP website for TUMSDA, built with Bootstrap 5.

## What I've built so far
- **Responsive layout** powered by Bootstrap 5 with a consistent header/footer.
- **Seven-section layout** with a fixed right-side blue panel to match the Adventist brand identity.
- **Mobile side panel navigation** with overlay, close button, and active-link highlighting. (**NOT PROPERLY DONE, but will work on it later)
- **Hero carousel** on the homepage with multiple (4) slides and clear calls to action. -- slide 1-Welcome to TUMSDA -- slide 2-Church Choir --slide 3-TUMSDA Departments -- slide 4-TUMSDA Ministries.
- **Word of the Day** from `includes/verse_of_day.php` using a local verse pool with optional remote API fallback.
- **Events and weekly meetings** teaser blocks with links to full details in respective pages.
- **Evangelism page** featuring a mission history accordion, CTAs, and gallery links.
- **Sermons and Music pages** embedding YouTube videos with featured and additional items.
- **Departments page** listing key church departments with descriptions, verses, and optional external links.
- **Leadership and Contact sections** with styled blocks and CTAs.
- **Popup cards** for Support, Mission Chair, Gallery, and Contact, controlled via `assets/js/main.js`.
- **Custom design system** in `assets/css/style.css` including typography, buttons, cards, and footer.

## Site Structure
- `header.php`, `footer.php` shared layout accross all the pages
- `index.php`, `about.php`, `departments.php`, `ministries.php`, `evangelism.php`, `sermons.php`, `leadership.php`
- `includes/verse_of_day.php` daily verse helper (offline pool + optional API)
- `data/events.php` events data
- `assets/css/style.css`, `assets/js/main.js`, `assets/img/*` (images used)


## To be added
- Update contact email and phone in `footer.php` and `contact.php` once the contact deatils are provided
- Implement a database with an admin login interphase to have things like Calender of events updated whenever necessary and even to be adding the Sabbath was nice gallerry and all other necessary components requiring regular updates
- All images used are in the `assets/img/` directorate and are named `logo.png`, `hero-1.jpg`, `hero-2.jpg`, `hero-3.jpg`, `mission-1.jpg`, `mission-2.jpg`
- More updates and enhancement once we're up and running as members interact with the web pages.