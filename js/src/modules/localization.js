export default function getLocalization(stringKey) {
  if (typeof window.Air_Frost_screenReaderText === 'undefined' || typeof window.Air_Frost_screenReaderText[stringKey] === 'undefined') {
    // eslint-disable-next-line no-console
    console.error(`Missing translation for ${stringKey}`);
    return '';
  }
  return window.Air_Frost_screenReaderText[stringKey];
}
