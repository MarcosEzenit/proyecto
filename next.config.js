const path = require('path')

module.exports = {
  webpack (config, options) {
    config.resolve.alias = {
        'resources': path.join(__dirname, 'resources/js')
    }
    return config
  }
}
