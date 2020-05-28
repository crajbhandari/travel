var editor = grapesjs.init({
   height: '100%',
   showOffsets: 1,
   noticeOnUnload: 0,
   storageManager: { autoload: 0 },
   container: '#gjs',
   fromElement: true,

   plugins: ['gjs-preset-webpage'],
   pluginsOpts: {
      'gjs-preset-webpage': {}
   }
});