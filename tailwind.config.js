module.exports = {
    theme: {
      extend: {
        keyframes: {
          typewriter: {
            '0%': { width: '0%' },
            '100%': { width: '100%' },
          },
          blink: {
            '50%': { borderColor: 'transparent' },
            '100%': { borderColor: 'white' },
          }
        },
        animation: {
          typewriter: 'typewriter 3s steps(30) infinite alternate',
          blink: 'blink 0.8s step-end infinite'
        },
      },
    }
  }
  