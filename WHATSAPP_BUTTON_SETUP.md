# WhatsApp Floating Button - Setup Instructions

## Files Created

1. **gcs-whatsapp-button.php** - The WhatsApp button component
2. **load-whatsapp-button.php** - Auto-loader script

## Installation Steps

### Step 1: Upload Files to WordPress

Upload these files to your WordPress child theme directory:
- `/wp-content/themes/astra-child/gcs-whatsapp-button.php`
- `/wp-content/themes/astra-child/load-whatsapp-button.php`

### Step 2: Add to functions.php

Add this **single line** to your child theme's `functions.php` file:

```php
require_once get_stylesheet_directory() . '/load-whatsapp-button.php';
```

**Where to add it:**
1. Go to WordPress Admin → Appearance → Theme File Editor
2. Select your child theme (Astra Child)
3. Click on `functions.php`
4. Add the line at the end of the file
5. Click "Update File"

### Step 3: Done!

The WhatsApp button will now appear on **all pages** automatically.

## Features

✅ **Fixed position** - Bottom-right corner, always visible
✅ **Mobile responsive** - Smaller on mobile devices
✅ **Pulse animation** - Gentle pulse to attract attention
✅ **Hover tooltip** - Shows "Contactează-ne" on hover (desktop only)
✅ **Direct WhatsApp link** - Opens chat with Mihaela (0743212055)
✅ **Pre-filled message** - "Bună! Aș dori mai multe informații despre serviciile de creditare."

## Customization

### Change Phone Number

Edit `/gcs-whatsapp-button.php` line 15:
```php
$phone = '40743212055'; // Change this number
```

### Change Pre-filled Message

Edit `/gcs-whatsapp-button.php` line 16:
```php
$message = 'Your custom message here';
```

### Change Position

Edit the CSS in `/gcs-whatsapp-button.php` around line 108:
```css
.gcs-whatsapp-button {
    bottom: 1.5rem !important; /* Distance from bottom */
    right: 1.5rem !important;  /* Distance from right */
}
```

### Change Colors

- **WhatsApp Green:** `#25D366` (line 118)
- **Hover Color:** `#128C7E` (line 133)

### Disable Pulse Animation

Remove or comment out line 169:
```css
/* animation: gcs-whatsapp-pulse 2s infinite !important; */
```

## Testing

1. Visit any page on your website
2. You should see a green floating WhatsApp button in the bottom-right corner
3. Hover over it (desktop) to see the tooltip
4. Click it to open WhatsApp chat with Mihaela

## Troubleshooting

**Button not appearing?**
- Check that both files are uploaded correctly
- Check that `functions.php` includes the loader script
- Clear WordPress cache (if using caching plugin)
- Check browser console for JavaScript errors

**Wrong phone number?**
- Format must be: country code (40) + number without leading 0
- Example: 0743212055 becomes 40743212055

**Button overlapping with other elements?**
- Increase z-index in CSS (currently 9999)
- Adjust bottom/right position

**WhatsApp not opening on mobile?**
- Ensure WhatsApp is installed on the device
- Check that the phone number format is correct (+40 prefix)
