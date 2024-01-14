
import React from 'react';
import '../styles/Header.css';
import logoImage from '../imgs/logo.svg';
import 'bootstrap/dist/css/bootstrap.min.css';

function Header({ onViewChange }) {
    return (
        <header className="header-container">
            <div className="logo-container">
                <img src={logoImage} alt="Logo" className="logo-image" />
            </div>
            <div className="links-container">
                <a href="#" className="header-link" onClick={() => onViewChange('home')}>
                    <svg className="col-12" xmlns="http://www.w3.org/2000/svg" width="39.949" height="39.949" viewBox="0 0 39.949 39.949">
                        <g id="shape" transform="translate(-9.662 -409.657)">
                            <path id="Bk_circle_bkgd" data-name="Bk circle bkgd" d="M27.974,851.458a19.974,19.974,0,1,1,19.974-19.974A19.974,19.974,0,0,1,27.974,851.458Z" transform="translate(1.662 -401.852)" fill="#333"/>
                            <path id="Home_icon" data-name="Home icon" d="M47.581,851.842h-4.36a1.817,1.817,0,0,1-1.815-1.814V845.59a1.516,1.516,0,0,0-2.934.077l.012,4.361a1.817,1.817,0,0,1-1.816,1.814H32.31a1.816,1.816,0,0,1-1.814-1.814v-6.714a1.8,1.8,0,0,1,.524-1.308l7.639-7.641a1.866,1.866,0,0,1,2.569,0l7.639,7.641a1.8,1.8,0,0,1,.468.827h.055l.006,7.2A1.816,1.816,0,0,1,47.581,851.842Zm-7.64-8.238a2.409,2.409,0,0,1,2.344,1.89l.01,4.533a.928.928,0,0,0,.927.926h4.36a.927.927,0,0,0,.926-.926l-.007-6.751a.912.912,0,0,0-.263-.646L40.6,834.993a.955.955,0,0,0-1.309,0l-7.64,7.641a.907.907,0,0,0-.264.645v6.751a.928.928,0,0,0,.926.926h4.359a.927.927,0,0,0,.927-.926v-4.461A2.423,2.423,0,0,1,39.941,843.6Z" transform="translate(-10.049 -413.01)" fill="#fff"/>
                        </g>
                    </svg>
                    <p className="col-12">Strona główna</p>
                </a>
                <a href="#" className="header-link" onClick={() => onViewChange('exerciseSelection')}>
                    <svg className="col-12" xmlns="http://www.w3.org/2000/svg" width="40.007" height="40.007" viewBox="0 0 40.007 40.007">
                        <g id="shape" transform="translate(-209.853 -409.853)">
                            <path id="Bk_circle_bkgd" data-name="Bk circle bkgd" d="M226.135,853.456a20,20,0,1,1,20-20A20,20,0,0,1,226.135,853.456Z" transform="translate(3.721 -403.596)" fill="#333"/>
                        </g>
                        <path id="Icon_map-gym" data-name="Icon map-gym" d="M8.927,21.791a.481.481,0,0,1-.024.677l-1.038.971a.477.477,0,0,1-.674-.024L1.145,16.9a.481.481,0,0,1,.024-.677l1.04-.969a.477.477,0,0,1,.674.024Zm7.714-12.26a.481.481,0,0,1-.024.677l-6.534,6.1a.477.477,0,0,1-.674-.024L7.85,14.6a.481.481,0,0,1,.024-.677l6.532-6.1a.477.477,0,0,1,.674.024l1.562,1.683ZM11.15,19.713a.482.482,0,0,1-.024.677l-1.04.97a.477.477,0,0,1-.674-.024L3.37,14.82a.481.481,0,0,1,.024-.677l1.038-.97a.477.477,0,0,1,.674.024ZM21.218,9.765a.481.481,0,0,1-.025.677l-1.039.97a.478.478,0,0,1-.675-.024L13.436,4.874A.481.481,0,0,1,13.46,4.2L14.5,3.224a.477.477,0,0,1,.674.024Zm2.22-2.074a.482.482,0,0,1-.024.677l-1.037.97a.477.477,0,0,1-.674-.024L15.66,2.8a.482.482,0,0,1,.024-.677l1.038-.972a.476.476,0,0,1,.673.024Z" transform="translate(7.712 7.711)" fill="#fff"/>
                    </svg>
                    <p className="col-12">Treningi</p>
                </a>
                <a href="#" className="header-link" onClick={() => onViewChange('login')}>
                    <svg className="col-12" xmlns="http://www.w3.org/2000/svg" width="40.007" height="40.007" viewBox="0 0 40.007 40.007">
                        <g id="shape" transform="translate(-209.853 -409.853)">
                            <path id="Bk_circle_bkgd" data-name="Bk circle bkgd" d="M226.135,853.456a20,20,0,1,1,20-20A20,20,0,0,1,226.135,853.456Z" transform="translate(3.721 -403.596)" fill="#333"/>
                            <g id="Account_icon" data-name="Account icon" transform="translate(221.055 420.255)">
                                <path id="Path_220" data-name="Path 220" d="M241.711,846.607a5.329,5.329,0,1,1,5.33-5.329A5.328,5.328,0,0,1,241.711,846.607Zm0-9.814a4.486,4.486,0,1,0,4.487,4.486A4.486,4.486,0,0,0,241.711,836.793Z" transform="translate(-232.782 -835.95)" fill="#fff"/>
                                <path id="Path_221" data-name="Path 221" d="M230.631,864.478v-4.2a2.747,2.747,0,0,1,2.743-2.745h10.682a2.747,2.747,0,0,1,2.744,2.745v4.2h.843v-4.2a3.591,3.591,0,0,0-3.587-3.588H233.374a3.591,3.591,0,0,0-3.586,3.588v4.2Z" transform="translate(-229.788 -845.36)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p className="col-12">Zaloguj</p>
                </a>
                <a href="#" className="header-link" onClick={() => onViewChange('statistics')}>
                    <svg className="col-12" xmlns="http://www.w3.org/2000/svg" width="40.007" height="40.007" viewBox="0 0 40.007 40.007">
                        <g id="shape" transform="translate(-209.853 -409.853)">
                            <path id="Bk_circle_bkgd" data-name="Bk circle bkgd" d="M226.135,853.456a20,20,0,1,1,20-20A20,20,0,0,1,226.135,853.456Z" transform="translate(3.721 -403.596)" fill="#333"/>
                            <g id="Account_icon" data-name="Account icon" transform="translate(221.055 420.255)">
                                <path id="Path_220" data-name="Path 220" d="M241.711,846.607a5.329,5.329,0,1,1,5.33-5.329A5.328,5.328,0,0,1,241.711,846.607Zm0-9.814a4.486,4.486,0,1,0,4.487,4.486A4.486,4.486,0,0,0,241.711,836.793Z" transform="translate(-232.782 -835.95)" fill="#fff"/>
                                <path id="Path_221" data-name="Path 221" d="M230.631,864.478v-4.2a2.747,2.747,0,0,1,2.743-2.745h10.682a2.747,2.747,0,0,1,2.744,2.745v4.2h.843v-4.2a3.591,3.591,0,0,0-3.587-3.588H233.374a3.591,3.591,0,0,0-3.586,3.588v4.2Z" transform="translate(-229.788 -845.36)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>
                    <p className="col-12">Statystyki</p>
                </a>
            </div>
        </header>
    );
}

export default Header;
