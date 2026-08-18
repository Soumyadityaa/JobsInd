# JobsInd Alert Portal

JobsInd is a trusted job portal designed to connect job seekers with the latest private jobs, government notifications, work-from-home opportunities, and internships across India. This project is a fully responsive, lightweight frontend web application built entirely with vanilla web technologies.

## Features

* **Dynamic Search & Filtering:** Real-time client-side filtering by job title, organization, qualification, and category without page reloads.
* **Responsive Data Tables:** Custom CSS techniques automatically transform traditional HTML data tables into mobile-friendly card layouts on screens smaller than 650px.
* **Dropdown Navigation:** Clean, multi-level navigation menu for easy access to job categories, locations, and career advice.
* **Multi-Page Architecture:** Cleanly separated architecture including dedicated pages for Home, About Us, Contact Us, and Privacy Policy.
* **UI/UX Enhancements:** Color-coded badge highlights for "Urgent", "New", "WFH", and "Private" job listings, alongside interactive sidebar widgets.
* **Zero Dependencies:** Built entirely without external CSS frameworks (like Bootstrap) or JS libraries (like jQuery) for maximum performance and instant load times.

## Project Structure

```text
jobsind/
│
├── index.html       # Homepage with primary job listings and subscription form
├── about.html       # About Us page detailing the company mission and vision
├── contact.html     # Contact Us page with support details and contact form
├── privacy.html     # Privacy Policy documentation page
├── style.css        # Global stylesheet including CSS variables and media queries
└── script.js        # Vanilla JavaScript for search filtering and form handling
