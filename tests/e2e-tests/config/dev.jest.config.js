/**
 * WordPress dependencies
 */
const baseConfig = require( '@wordpress/scripts/config/jest-e2e.config' );

module.exports = {
	...baseConfig,
	setupFiles: ["<rootDir>/dev_env.js"],
	roots: ["<rootDir>/../specs/"]
};
