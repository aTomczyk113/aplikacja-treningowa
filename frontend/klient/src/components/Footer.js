import React from 'react';
import '../styles/Footer.css';
import logoImage from '../imgs/logo.svg';
function Footer() {
    return (
        <footer className="footer-container">
            <div className="logo-container">
                <img src={logoImage} alt="Logo" className="logo-image" />
            </div>
            <div className="empty-container"></div>
        </footer>
    );
}

export default Footer;
