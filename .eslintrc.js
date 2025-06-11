module.exports = {
  ignorePatterns: ['js/dist/*.js', 'node_modules/**/*.js', '**/gulp/**/*.js', '**/gulp/*.js', 'gulpfile.js'],
  parser: '@babel/eslint-parser',
  parserOptions: {
    requireConfigFile: false,
  },
  extends: 'eslint-config-airbnb/base',
  rules: {
    indent: ['error', 2],
  },
  env: {
    browser: true,
    jquery: true,
  },
};
