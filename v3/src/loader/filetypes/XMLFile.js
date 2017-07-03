var Class = require('../../utils/Class');
var CONST = require('../const');
var File = require('../File');
var ParseXML = require('../../dom/ParseXML');

//  Phaser.Loader.FileTypes.XMLFile

var XMLFile = new Class({

    Extends: File,

    initialize:

    function XMLFile (key, url, path, xhrSettings)
    {
        if (path === undefined) { path = ''; }

        if (!key)
        {
            throw new Error('Error calling \'Loader.xml\' invalid key provided.');
        }

        if (!url)
        {
            url = path + key + '.xml';
        }
        else
        {
            url = path.concat(url);
        }

        File.call(this, 'xml', key, url, 'text', xhrSettings);
    },

    onProcess: function (callback)
    {
        this.state = CONST.FILE_PROCESSING;

        this.data = ParseXML(this.xhrLoader.responseText);

        if (this.data === null)
        {
            throw new Error('XMLFile: Invalid XML');
        }

        this.onComplete();

        callback(this);
    }

});

module.exports = XMLFile;
