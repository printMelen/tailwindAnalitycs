/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.{html,php}',
    './assets/templates/*.{html,php}',
    './assets/js/*.{html,js}',
  ],
  theme: {
    extend: {
      maxWidth:{
        'screen-2xl':'1600px',
        'screen-xl':'1180px',
      },
      backgroundImage: {
        'sectionHeader': "url('../../images/background-top.svg')",
        'sectionFooter': "url('../../images/background-bottom.svg')",
      }      
    },
    fontSize: {
      sm: '0.8rem',
      base: '18px',
      xl: '50px',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
    },
    lineHeight: {
      'titulo': '120%',
      'parrafo': '150%',
    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'back': '#EEEEF6',
      'pink': '#EF2A82',
      'midnight': '#0F1F4B',
      'white': '#FFF',
      'bordes': '#465B95',
      'letraHeader': '#8794BA',
      'bubble-gum': '#ff77e9',
      'bermuda': '#78dcca',
    },
  },
  plugins: [],
}

