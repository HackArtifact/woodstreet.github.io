class AcademyHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = ` <a href="Home.php" title="Home">
    <img class="header-img" src="images/WiWorks.png">
    <div class="header">
        <div class="header-name">
            <div class="wood-street-header">
                Wood Street
            </div>
            <div class="academy-header">
                Academy
            </div>
            </a>
            <a href="login.html">
                <div class="button-header">
                    <div class="active-button">
                        Login
                    </div>
                </div>
            </a>
        </div>
        <div class="header-navbar">
            <div class="shop-navbar">
                <a class="inter-normal-thunder-16px" href="shop.php">
                    Shop
                </a>
            </div>
            <div class="store-location-navbar">
                <a class="inter-normal-thunder-16px" href="Location.html">
                    Store Location
                </a>
            </div>
            <div class="contact-us-navbar">
                <a class="inter-normal-thunder-16px" href="ContactUs.html">
                    Contact US
                </a>
            </div>
            <div class="about-us-navbar">
                <a class="inter-normal-thunder-16px" href="Home.php#target">
                    About US
                </a>
            </div>
            <div class="repair-services-navbar">
                <a class="inter-normal-thunder-16px" href="Bookings.html">
                    Repair services
                </a>
            </div>
            <div class="tech-news-navbar">
                <a class="inter-normal-thunder-16px" href="https://www.bbc.com/news/technology">
                    Tech News
                </a>
            </div>
        </div>
    </div>
    `
    }
}

customElements.define('academy-header', AcademyHeader)

class LoggedHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
    <a href="Home.php" title="Home">
        <img class="header-img" src="images/WiWorks.png">
        <div class="header">
            <div class="header-name">
                <div class="wood-street-header">
                    Wood Street
                </div>
                <div class="academy-header">
                    Academy
                </div>
    </a>
    <a href="profile.php" class="inter-normal-thunder-16px">
        <div class="profile">
            <?php echo $_SESSION['id']; ?>
        </div>
        <img class="profile-img" src="images/Landing-student.png">
    </a>
    </div>
    <div class="header-navbar">
        <div class="shop-navbar">
            <a class="inter-normal-thunder-16px" href="shop.php">
                Shop
            </a>
        </div>
        <div class="store-location-navbar">
            <a class="inter-normal-thunder-16px" href="Location.html">
                Store Location
            </a>
        </div>
        <div class="contact-us-navbar">
            <a class="inter-normal-thunder-16px" href="ContactUs.html">
                Contact US
            </a>
        </div>
        <div class="about-us-navbar">
            <a class="inter-normal-thunder-16px" href="Home.html#target">
                About US
            </a>
        </div>
        <div class="repair-services-navbar">
            <a class="inter-normal-thunder-16px" href="Bookings.html">
                Repair services
            </a>
        </div>
        <div class="tech-news-navbar">
            <a class="inter-normal-thunder-16px" href="https://www.bbc.com/news/technology">
                Tech News
            </a>
        </div>
    </div>
    </div>
    `
    }
}

customElements.define('logged-header', LoggedHeader)

class AdminHeader extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
    <a href="Home.php" title="Home">
        <img class="header-img" src="images/WiWorks.png">
        <div class="header">
            <div class="header-name">
                <div class="wood-street-header">
                    Wood Street
                </div>
                <div class="academy-header">
                    Academy
                </div>
    </a>
    <a href="profile.php" class="inter-normal-thunder-16px">
        <div class="profile">
            <?php echo $_SESSION['id']; ?>
        </div>
        <img class="profile-img" src="images/Landing-student.png">
    </a>
    </div>
    <div class="header-navbar">
        <div class="admin-shop-navbar">
            <a class="inter-normal-thunder-16px" href="shop.php">
                Shop
            </a>
        </div>
        <div class="admin-store-location-navbar">
            <a class="inter-normal-thunder-16px" href="Location.html">
                Store Location
            </a>
        </div>
        <div class="admin-contact-us-navbar">
            <a class="inter-normal-thunder-16px" href="ContactUs.html">
                Contact US
            </a>
        </div>
        <div class="admin-about-us-navbar">
            <a class="inter-normal-thunder-16px" href="Home.html#target">
                About US
            </a>
        </div>
        <div class="admin-repair-services-navbar">
            <a class="inter-normal-thunder-16px" href="Bookings.html">
                Repair services
            </a>
        </div>
        <div class="admin-tech-news-navbar">
            <a class="inter-normal-thunder-16px" href="https://www.bbc.com/news/technology">
                Tech News
            </a>
        </div>
        <div class="admin-reports-navbar">
            <a class="inter-normal-thunder-16px" href="reports.php">
                Reports
            </a>
        </div>
    </div>
    </div>
    `
    }
}

customElements.define('admin-header', AdminHeader)

class AcademyFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `

    <div class="footer-withDots">

        <div class="ellipse-480-light"></div>
        <div class="ellipse-481-light"></div>
        <div class="ellipse-482-light"></div>
        <div class="ellipse-483-light"></div>
        <div class="ellipse-484-light"></div>
        <div class="ellipse-485-light"></div>
        <div class="ellipse-486-light"></div>
        <div class="ellipse-487-light"></div>
        <div class="ellipse-488-light"></div>
        <div class="ellipse-489-light"></div>
        <div class="ellipse-490-light"></div>
        <div class="ellipse-491-light"></div>
        <div class="ellipse-492-light"></div>
        <div class="ellipse-493-light"></div>
        <div class="ellipse-494-light"></div>
        <div class="ellipse-495-light"></div>
        <div class="ellipse-496-light"></div>
        <div class="ellipse-497-light"></div>
        <div class="ellipse-498-light"></div>
        <div class="ellipse-499-light"></div>
        <div class="ellipse-500-light"></div>
        <div class="ellipse-501-light"></div>
        <div class="ellipse-502-light"></div>
        <div class="ellipse-503-light"></div>
        <div class="ellipse-504-light"></div>
        <div class="ellipse-505-light"></div>
        <div class="ellipse-506-light"></div>
        <div class="ellipse-507-light"></div>
        <div class="ellipse-508-light"></div>
        <div class="ellipse-509-light"></div>
        <div class="ellipse-510-light"></div>
        <div class="ellipse-511-light"></div>
        <div class="ellipse-512-light"></div>
        <div class="ellipse-513-light"></div>
        <div class="ellipse-514-light"></div>
        <div class="ellipse-515-light"></div>
        <div class="ellipse-516-light"></div>
        <div class="ellipse-517-light"></div>
        <div class="ellipse-518-light"></div>
        <div class="ellipse-519-light"></div>
        <div class="ellipse-520-light"></div>
        <div class="ellipse-521-light"></div>
        <div class="ellipse-522-light"></div>
        <div class="ellipse-523-light"></div>
        <div class="ellipse-524-light"></div>
        <div class="ellipse-525-light"></div>
        <div class="ellipse-526-light"></div>
        <div class="ellipse-527-light"></div>
        <div class="ellipse-528-light"></div>
        <div class="ellipse-529-light"></div>
        <div class="ellipse-530-light"></div>
        <div class="ellipse-531-light"></div>
        <div class="ellipse-532-light"></div>
        <div class="ellipse-533-light"></div>
        <div class="ellipse-534-light"></div>
        <div class="ellipse-535-light"></div>
        <div class="ellipse-536-light"></div>
        <div class="ellipse-537-light"></div>
        <div class="ellipse-538-light"></div>
        <div class="ellipse-539-light"></div>
        <div class="ellipse-540-light"></div>
        <div class="ellipse-541-light"></div>
        <div class="ellipse-542-light"></div>
        <div class="ellipse-543-light"></div>
        <div class="ellipse-544-light"></div>
        <div class="ellipse-545-light"></div>
        <div class="ellipse-546-light"></div>
        <div class="ellipse-547-light"></div>
        <div class="ellipse-548-light"></div>
        <div class="ellipse-549-light"></div>
        <div class="ellipse-550-light"></div>
        <div class="ellipse-551-light"></div>
        <div class="ellipse-552-light"></div>
        <div class="ellipse-553-light"></div>
        <div class="ellipse-554-light"></div>
        <div class="ellipse-555-light"></div>
        <div class="ellipse-556-light"></div>
        <div class="ellipse-557-light"></div>
        <div class="ellipse-558-light"></div>
        <div class="ellipse-559-light"></div>
        <div class="ellipse-560-light"></div>
        <div class="ellipse-561-light"></div>
        <div class="ellipse-562-light"></div>
        <div class="ellipse-563-light"></div>
        <div class="ellipse-564-light"></div>
        <div class="ellipse-565-light"></div>
        <div class="ellipse-566-light"></div>
        <div class="ellipse-567-light"></div>
        <div class="ellipse-568-light"></div>
        <div class="ellipse-569-light"></div>
        <div class="ellipse-570-light"></div>
        <div class="ellipse-571-light"></div>
        <div class="ellipse-572-light"></div>
        <div class="ellipse-573-light"></div>
        <div class="ellipse-574-light"></div>
        <div class="ellipse-575-light"></div>
        <div class="ellipse-576-light"></div>
        <div class="ellipse-577-light"></div>
        <div class="ellipse-578-light"></div>
        <div class="ellipse-579-light"></div>
        <div class="ellipse-580-light"></div>
        <div class="ellipse-581-light"></div>
        <div class="ellipse-582-light"></div>
        <div class="ellipse-583-light"></div>
        <div class="ellipse-584-light"></div>
        <div class="ellipse-585-light"></div>
        <div class="ellipse-586-light"></div>
        <div class="ellipse-587-light"></div>
        <div class="ellipse-588-light"></div>
        <div class="ellipse-589-light"></div>
        <div class="ellipse-590-light"></div>
        <div class="ellipse-591-light"></div>
        <div class="ellipse-592-light"></div>
        <div class="ellipse-593-light"></div>
        <div class="ellipse-594-light"></div>
        <div class="ellipse-595-light"></div>
        <div class="ellipse-596-light"></div>
        <div class="ellipse-597-light"></div>
        <div class="ellipse-598-light"></div>
        <div class="ellipse-599-light"></div>
        <div class="ellipse-600-light"></div>
        <div class="ellipse-601-light"></div>
        <div class="ellipse-602-light"></div>
        <div class="ellipse-603-light"></div>
        <div class="ellipse-604-light"></div>
        <div class="ellipse-605-light"></div>
        <div class="ellipse-606-light"></div>
        <div class="ellipse-607-light"></div>
        <div class="ellipse-608-light"></div>
        <div class="ellipse-609-light"></div>
        <div class="ellipse-610-light"></div>
        <div class="ellipse-611-light"></div>
        <div class="ellipse-612-light"></div>
        <div class="ellipse-613-light"></div>
        <div class="ellipse-614-light"></div>

        <div class="footer">
            <div class="footer-name">
                Wood Works Academy 2022
            </div>
            <img class="twitter" src="images/twitter-logo.svg">
            <img class="facebook" src="images/facebook-logo.svg">
            <img class="instagram" src="images/insta-logo.svg">
            <p class="footer-mid roboto-normal-cloud-burst-12px">
                <span class="span0 roboto-normal-cloud-burst-12px">
                    COPYRIGHT&copy
                    &nbsp;
                    &nbsp;
                </span>
                <span class="span1 roboto-normal-cloud-burst-12px">
                    TERMS
                    &amp;
                    CONDITIONS
                </span>
                <span class="span2 roboto-normal-cloud-burst-12px">
                    &nbsp;
                    &nbsp;
                </span>
                <span class="span3 roboto-normal-cloud-burst-12px">
                    PRIVACY POLICY
                </span>
            </p>
        </div>
    </div>

    `
    }
}

customElements.define('academy-footer', AcademyFooter)

class PlainFooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
    <div class="plain-footer">
        <div class="p-footer-name">
            Wood Works Academy 2022
        </div>
        <img class="p-twitter" src="images/twitter-logo.svg">
        <img class="p-facebook" src="images/facebook-logo.svg">
        <img class="p-instagram" src="images/insta-logo.svg">
        <p class="p-footer-mid roboto-normal-cloud-burst-12px">
            <span class="span0 roboto-normal-cloud-burst-12px">
                COPYRIGHT&copy
                &nbsp;
                &nbsp;
            </span>
            <span class="span1 roboto-normal-cloud-burst-12px">
                TERMS
                &amp;
                CONDITIONS
            </span>
            <span class="span2 roboto-normal-cloud-burst-12px">
                &nbsp;
                &nbsp;
            </span>
            <span class="span3 roboto-normal-cloud-burst-12px">
                PRIVACY POLICY
            </span>
        </p>
    </div>
    </div>

    `
    }
}

customElements.define('plain-footer', PlainFooter)