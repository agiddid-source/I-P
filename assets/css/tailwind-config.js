
tailwind.config = {
    theme: {
        extend: {
            colors: {
                brand: {
                    DEFAULT: '#0B1F33',
                    dark: '#071522',
                    light: '#163A59'
                },
                accent: {
                    DEFAULT: '#0F9D78',
                    dark: '#087A5D',
                    light: '#DDF5ED'
                },
                surface: '#FFFFFF',
                canvas: '#F7F9FB',
                border: '#E5E9EF',
                muted: '#667085'
            },

            fontFamily: {
                sans: ['Inter', 'sans-serif']
            },

            borderRadius: {
                card: '12px',
                panel: '16px'
            },

            boxShadow: {
                card: '0 2px 10px rgba(16, 24, 40, 0.04)'
            }
        }
    }
};
