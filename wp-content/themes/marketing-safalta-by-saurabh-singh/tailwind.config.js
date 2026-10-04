/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'brand-red': '#E31C25',
        'brand-red-dark': '#C41820',
        'brand-red-light': '#FF3340',
        'brand-black': '#0D0D0D',
        'brand-dark': '#1A1A1A',
        'brand-gray': '#6B7280',
        'brand-offwhite': '#F9F9F9',
        'brand-ink': '#101828',
      },
      fontFamily: {
        'inter': ['Inter', 'sans-serif'],
      },
      boxShadow: {
        'red': '0 10px 30px rgba(227,28,37,0.35)',
        'red-sm': '0 4px 15px rgba(227,28,37,0.2)',
        'card': '0 4px 20px rgba(0,0,0,0.08)',
        'card-hover': '0 12px 40px rgba(0,0,0,0.15)',
      },
      animation: {
        'scroll-left': 'scrollLeft 30s linear infinite',
        'float': 'float 3s ease-in-out infinite',
        'pulse-red': 'pulseRed 2s ease-in-out infinite',
      },
      keyframes: {
        scrollLeft: {
          '0%': { transform: 'translateX(0)' },
          '100%': { transform: 'translateX(-50%)' },
        },
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-8px)' },
        },
        pulseRed: {
          '0%, 100%': { boxShadow: '0 0 0 0 rgba(227,28,37,0.4)' },
          '50%': { boxShadow: '0 0 0 12px rgba(227,28,37,0)' },
        },
      },
    },
  },
  plugins: [],
}
