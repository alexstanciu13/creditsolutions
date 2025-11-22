# WP Mail SMTP Setup Guide - Global Credit Solutions

## Why This Fixes Spam Issues:
- Bypasses Hostinger's mail system (which adds broken tracking links)
- Uses dedicated email service with excellent reputation
- Proper authentication (SPF, DKIM) handled automatically
- 99%+ deliverability rate

## Step 1: Install WP Mail SMTP Plugin

1. Go to WordPress Admin → Plugins → Add New
2. Search for "WP Mail SMTP"
3. Install and Activate **"WP Mail SMTP by WPForms"**

## Step 2: Choose Your SMTP Service

### Option A: SendGrid (RECOMMENDED - 100 emails/day free)

**Why SendGrid:**
- Free tier: 100 emails/day forever
- Excellent reputation
- Easy setup
- Great deliverability

**Setup:**

1. **Create SendGrid Account:**
   - Go to: https://sendgrid.com/
   - Sign up for free account
   - Verify your email

2. **Create API Key:**
   - In SendGrid dashboard → Settings → API Keys
   - Click "Create API Key"
   - Name: `WordPress Contact Forms`
   - Permissions: **Full Access**
   - Copy the API key (you'll only see it once!)

3. **Configure in WordPress:**
   - Go to: WP Mail SMTP → Settings
   - Mailer: Select **SendGrid**
   - API Key: Paste your API key
   - From Email: `contact@creditsolutions.ro`
   - From Name: `Global Credit Solutions`
   - Save Settings

4. **Send Test Email:**
   - WP Mail SMTP → Email Test
   - Send to your email
   - Check inbox (should arrive instantly!)

### Option B: Gmail SMTP (If you have Google Workspace)

**Requirements:**
- Google Workspace account (not free Gmail)
- App Password enabled

**Setup:**

1. **Generate App Password:**
   - Google Account → Security → 2-Step Verification → App Passwords
   - Generate password for "Mail"

2. **Configure in WordPress:**
   - WP Mail SMTP → Settings
   - Mailer: **Gmail**
   - From Email: Your Google Workspace email
   - Return Path: Check this box
   - Authentication: **Yes**
   - SMTP Username: Your full Google email
   - SMTP Password: The app password you generated
   - Save Settings

### Option C: Mailgun (5,000 emails/month free)

**Setup:**

1. **Create Mailgun Account:**
   - Go to: https://www.mailgun.com/
   - Sign up (requires credit card for verification, but won't charge)

2. **Get Credentials:**
   - Mailgun Dashboard → Sending → Domain Settings
   - Note: Domain, API Key

3. **Configure in WordPress:**
   - WP Mail SMTP → Settings
   - Mailer: **Mailgun**
   - API Key: Your Mailgun API key
   - Domain Name: Your Mailgun domain
   - Region: US or EU (based on your selection)
   - From Email: `contact@creditsolutions.ro`
   - Save Settings

## Step 3: Verify Setup

1. **Send Test Email:**
   ```
   WP Mail SMTP → Email Test
   - Send to: your-email@example.com
   - Click "Send Email"
   ```

2. **Check Results:**
   - Email should arrive in inbox (not spam!)
   - Check email headers to confirm sent via SendGrid/Mailgun

3. **Test Contact Form:**
   - Submit a test through your contact form
   - Should receive email in inbox

## Step 4: Monitor Deliverability

**SendGrid Dashboard:**
- View delivery stats
- Track opens/clicks
- Monitor bounces

**Mail-Tester Check:**
- After setup, test again at https://www.mail-tester.com
- Should now get 10/10 with no broken links

## Troubleshooting

### Emails still not sending?

Check WP Mail SMTP → Email Log:
- Shows all sent emails
- Error messages if any

### "Could not authenticate" error?

- Double-check API key
- Verify SendGrid account is active
- Check for extra spaces in API key

### Gmail "Less secure apps" error?

- Use App Password, not regular password
- Enable 2-Step Verification first

## Additional Optimization

### Add SPF Record to DNS:

Add this TXT record to your domain DNS:
```
v=spf1 include:sendgrid.net ~all
```

Replace `sendgrid.net` with your email provider:
- SendGrid: `sendgrid.net`
- Mailgun: `mailgun.org`
- Gmail: `_spf.google.com`

### Enable DKIM:

Most providers (SendGrid, Mailgun) handle this automatically.
Check your provider's documentation for domain verification.

## Expected Results

**Before (Hostinger mail):**
- 9.5/10 mail-tester score
- Broken link error
- Emails go to spam

**After (WP Mail SMTP + SendGrid):**
- 10/10 mail-tester score
- No errors
- Emails arrive in inbox
- Professional email tracking

## Support

**WP Mail SMTP Plugin:**
- Documentation: https://wpmailsmtp.com/docs/

**SendGrid:**
- Support: https://sendgrid.com/support/

**Need Help?**
- Test at: https://www.mail-tester.com
- Check WordPress → WP Mail SMTP → Email Log
