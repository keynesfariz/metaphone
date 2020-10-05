module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: {
        enabled: true,
        content: [
            './resources/views/**/*.blade.php'
        ]
    },
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [],
}