# Waine Website

A modern, professional website built with PHP and HTML5/CSS3, featuring a responsive design and multiple pages.

## Features

✅ **4 Main Pages:**
- **Home/Landing Page**: Hero section with feature highlights and call-to-action
- **Products & Services**: Showcase of services with pricing plans
- **About Us**: Company information, team profiles, and statistics
- **Contact Us**: Contact form, business information, and embedded map

✅ **Modern Design:**
- Fully responsive layout (mobile, tablet, desktop)
- Professional color scheme and typography
- Smooth navigation with active page indicators
- Beautiful CSS animations and hover effects
- Professional footer with copyright

✅ **Features:**
- Grid-based layout using CSS Grid
- Flexbox navigation
- Responsive forms with validation
- Mobile-first design approach
- Clean, semantic HTML structure

## Project Structure

```
website/
├── public/
│   ├── index.php                 # Main router and entry point
│   └── css/
│       └── app.css               # All CSS styling
├── resources/
│   ├── views/
│   │   ├── landing.blade.php     # Home page
│   │   ├── products.blade.php    # Products & Services page
│   │   ├── about.blade.php       # About Us page
│   │   ├── contact.blade.php     # Contact Us page
│   │   └── layouts/
│   │       └── app.blade.php     # Main layout template
│   ├── css/
│   │   └── app.css               # Stylesheet
│   └── js/
│       └── app.js                # JavaScript (if needed)
├── routes/
│   └── web.php                   # Route definitions
└── README.md                      # This file
```

## Getting Started

### Requirements
- PHP 8.0 or higher
- Web server (Apache, Nginx, or use PHP's built-in server)
- Modern web browser

### Running Locally

**Option 1: Using PHP Built-in Server**
```bash
cd website
php -S localhost:8000 -t public
```
Then open http://localhost:8000 in your browser.

**Option 2: Using XAMPP Apache**
1. Place the `website` folder in `C:\xampp\htdocs\`
2. Start Apache from XAMPP Control Panel
3. Navigate to http://localhost/waine/website/public

**Option 3: Using Any Web Server**
Configure your web server to serve the `public` directory as the document root.

## Deployment

### To Apache
1. Upload the entire `website` folder to your web hosting
2. Configure a virtual host to point to the `public` directory
3. Ensure proper file permissions (755 for directories, 644 for files)

### Virtual Host Configuration Example
```apache
<VirtualHost *:80>
    ServerName waine.com
    ServerAlias www.waine.com
    DocumentRoot /var/www/html/website/public
    
    <Directory /var/www/html/website/public>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### .htaccess for URL Rewriting
The `public/index.php` handles all routing. Ensure your web server can process the requests properly.

## Customization

### Changing Content
Edit the files in `resources/views/` to modify page content:
- `landing.blade.php` - Homepage content
- `products.blade.php` - Products/services information
- `about.blade.php` - About company, team, and statistics
- `contact.blade.php` - Contact form and information

### Styling
Edit `resources/css/app.css` to customize:
- Colors
- Fonts
- Layout
- Responsive breakpoints

### Navigation
The navigation menu is in `resources/views/layouts/app.blade.php`. Add new links by:
1. Adding a route in `public/index.php`
2. Adding a navigation link in the layout
3. Creating a new view file

## Pages Overview

### 1. Landing Page (Home)
- Hero section with compelling headline
- Feature highlights (4 cards)
- Call-to-action button
- Professional styling

### 2. Products & Services
- Service cards (6 services)
- Pricing plans (3 tiers)
- Feature comparisons
- Call-to-action buttons

### 3. About Us
- Company history
- Mission statement
- Core values (4 values)
- Team members (4 profiles)
- Statistics (4 metrics)

### 4. Contact Us
- Contact information
- Business hours
- Contact form
- Social media links
- Embedded Google Map

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Responsive Design

The website is fully responsive with breakpoints at:
- **Desktop**: 1200px and above
- **Tablet**: 768px to 1199px
- **Mobile**: Below 768px
- **Small Mobile**: Below 480px

## CSS Features Used

- CSS Grid for layouts
- Flexbox for components
- CSS custom properties (variables)
- Media queries for responsive design
- CSS transitions and transforms
- CSS gradients
- CSS shadows and borders

## Contact Form

The contact form includes fields for:
- Name (required)
- Email (required)
- Phone
- Subject (required)
- Company
- Service type (dropdown)
- Message (required)
- Terms agreement (required)

**Note**: Currently, the form is a static HTML form. To process submissions, integrate with a backend service or email handler.

## Future Enhancements

Potential additions:
- [ ] Form submission backend
- [ ] JavaScript interactivity
- [ ] Blog section
- [ ] User authentication
- [ ] Database integration
- [ ] Admin panel
- [ ] Email notifications
- [ ] Analytics integration

## Troubleshooting

### Pages not loading
- Ensure the web server is running
- Check file paths are correct
- Verify public directory permissions

### Styling not applied
- Clear browser cache (Ctrl+Shift+Delete)
- Check CSS file path in layout
- Verify CSS file exists at correct location

### Navigation not working
- Check routes in `public/index.php`
- Verify page files exist in `resources/views/`
- Check file naming matches route definitions

## Performance Tips

1. **Images**: Optimize image sizes before uploading
2. **Caching**: Enable browser caching on your web server
3. **Minification**: Minify CSS for production
4. **Compression**: Enable gzip compression on server

## Security Considerations

1. Validate all form inputs on the backend
2. Use HTTPS for production
3. Sanitize and escape all user inputs
4. Keep PHP and dependencies updated
5. Use secure headers (CSP, X-Frame-Options, etc.)

## License

This project is open source and available for educational use.

## Support

For issues or questions, please refer to the documentation or modify as needed for your specific use case.

---

**Built with** ❤️ for the Waine Project
