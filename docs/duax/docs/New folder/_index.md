<p class="HeroText">
	<strong>Daux.io</strong> is a documentation generator that uses a simple folder structure and Markdown files to create custom documentation on the fly. It helps you create great looking documentation in a developer friendly way.
</p>

---

### Features

---

<div class="Row">
<div class="Row__third">

#### For Authors

</div>
<div class="Row__third">

#### For Developers

-   Full access to the internal API to create new pages programatically
-   Work with pages metadata

</div>
<div class="Row__third">

#### For Marketing

-   100% Mobile Responsive
-   4 Built-In Themes or roll your own
-   Functional, Flat Design Style
-   Optional code float layout
-   Shareable/Linkable SEO Friendly URLs
-   Supports Google Analytics and Piwik Analytics

</div>
</div>

---

### Installation and usage

If you have **PHP** and Composer installed

```bash
composer global require daux/daux.io

# Next to your `docs` folder, run
daux generate
```

Or if you wish to use **Docker**

```bash
# Next to your `docs` folder, run
docker run --rm -it -w /build -v "$PWD":/build daux/daux.io daux generate
```

---
