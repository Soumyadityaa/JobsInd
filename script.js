// Hamburger Menu Toggle Logic
function toggleMenu() {
  const navLinks = document.getElementById('nav-links');
  navLinks.classList.toggle('active');
}

// Table Filtering Logic
function applyFilter() {
  const searchVal = document.getElementById('searchInput').value.toLowerCase().trim();
  const selectedCategory = document.getElementById('categorySelect').value;
  const rows = document.querySelectorAll('#recruitmentTable tbody tr:not(#noResultsRow)');
  const noResultsRow = document.getElementById('noResultsRow');

  let visibleCount = 0;

  rows.forEach(row => {
    const rowText = Array.from(row.querySelectorAll('td:not(:last-child)'))
      .map(td => td.textContent)
      .join(' ')
      .toLowerCase();

    const rowCategory = row.getAttribute('data-category');

    const matchesSearch = rowText.includes(searchVal);
    const matchesCategory = selectedCategory === "" || rowCategory === selectedCategory;

    if (matchesSearch && matchesCategory) {
      row.style.display = "";
      visibleCount++;
    } else {
      row.style.display = "none";
    }
  });

  if (noResultsRow) {
    noResultsRow.style.display = visibleCount === 0 ? "table-row" : "none";
  }
}

// Contact Form Submit Logic
function handleContactSubmit(event) {
  event.preventDefault();
  const feedback = document.getElementById('formFeedback');
  if(feedback) {
    feedback.style.display = 'block';
    document.getElementById('contactForm').reset();
    setTimeout(() => {
      feedback.style.display = 'none';
    }, 5000);
  }
}

// Email Subscription Form Submit Logic
function handleSubscribeSubmit(event) {
  event.preventDefault();
  const feedback = document.getElementById('subscribeFeedback');
  if(feedback) {
    feedback.style.display = 'block';
    document.getElementById('subscribeForm').reset();
    setTimeout(() => {
      feedback.style.display = 'none';
    }, 5000);
  }
}
