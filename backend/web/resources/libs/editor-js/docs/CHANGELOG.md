# Changelog

### 2.18

- `New` *I18n API* — Ability to provide internalization for Editor.js core and tools. [#751](https://github.com/codex-team/editor.js/issues/751)
- `New` — Block API that allows you to access certain Block properties and methods
- `Improvements` - TSLint (deprecated) replaced with ESLint, old config changed to [CodeX ESLint Config](https://github.com/codex-team/eslint-config).
- `Improvements` - Fix many code-style issues, add missed annotations.
- `Improvements` - Adjusted GitHub action for ESLint.
- `Improvements` - Blocks API: if `blocks.delete` method is called, but no Block is selected, show warning instead of throwing an error [#1102](https://github.com/codex-team/editor.js/issues/1102)
- `Improvements` - Blocks API: allow deletion of blocks by specifying block index via `blocks.delete(index)`.
- `Improvements` - UX: Navigate next Block from the last non-initial one creates new initial Block now [1103](https://github.com/codex-team/editor.js/issues/1103)
- `Improvements` - Improve performance of DOM traversing at the `isEmpty()` method [#1095](https://github.com/codex-team/editor.js/issues/1095)
- `Improvements` - Add code of conduct
- `Improvements` - Disabled useCapture flag for a block keydown handling. That will allow plugins to override keydown and stop event propagation, for example, to make own Tab behavior.
- `Improvements` - All modules now might have `destroy` method called on Editor.js destroy
- `Fix` - Editor's styles won't be appended to the `<head>` when another instance have already do that [#1079](https://github.com/codex-team/editor.js/issues/1079)
- `Fix` - Fixed wrong toolbar icon centering in Firefox [#1120](https://github.com/codex-team/editor.js/pull/1120)
- `Fix` - Toolbox: Tool's order in Toolbox now saved in accordance with `tools` object keys order [#1073](https://github.com/codex-team/editor.js/issues/1073)
- `Fix` - Setting `autofocus` config property to `true` cause adding `.ce-block--focused` for the autofocused block  [#1073](https://github.com/codex-team/editor.js/issues/1124)
- `Fix` - Public getter `shortcut` now works for Inline Tools [#1132](https://github.com/codex-team/editor.js/issues/1132)
- `Fix` - `CMD+A` handler removed after Editor.js destroy [#1133](https://github.com/codex-team/editor.js/issues/1133)

>  *Breaking changes* `blocks.getBlockByIndex` method now returns BlockAPI object. To access old value, use BlockAPI.holder property


### 2.17

- `Improvements` - Editor's [onchange callback](https://editorjs.io/configuration#editor-modifications-callback) now accepts an API as a parameter
- `Fix` - Some mistakes are fixed in [installation.md](installation.md)
- `Fix` - Fixed multiple paste callback triggering in a case when several editors are instantiated [#1011](https://github.com/codex-team/editor.js/issues/1011)
- `Fix` - Fixed inline toolbar flipper activation on closing conversion toolbar [#995](https://github.com/codex-team/editor.js/issues/995)
- `Improvements` - New window tab is opened by clicking on anchor with ctrl [#1057](https://github.com/codex-team/editor.js/issues/1057)
- `Fix` - Fix block-tune buttons alignment in some CSS-resetors that forces `box-sizing: border-box` rule [#1003](https://github.com/codex-team/editor.js/issues/1003)
- `Improvements` - New style of a Block Settings button. Focused block background removed.
- `New` — Add in-house copy-paste support through `application/x-editor-js` mime-type
- `New` Block [lifecycle hook](tools.md#block-lifecycle-hooks) `moved`
- `Deprecated` — [`blocks.swap(fromIndex, toIndex)`](api.md) method is deprecated. Use `blocks.move(toIndex, fromIndex)` instead.
- `Fix` — Improve plain text paste [#1012](https://github.com/codex-team/editor.js/issues/1012)
- `Fix` — Fix multiline paste [#1015](https://github.com/codex-team/editor.js/issues/1015)


### 2.16.1

- `Fix` — Fix Firefox bug with incorrect height and cursor position of empty content editable elements [#947](https://github.com/codex-team/editor.js/issues/947) [#876](https://github.com/codex-team/editor.js/issues/876) [#608](https://github.com/codex-team/editor.js/issues/608) [#876](https://github.com/codex-team/editor.js/issues/876)
- `Fix` — Set initial hidden Inline Toolbar position [#979](https://github.com/codex-team/editor.js/issues/979)
- `Fix` — Fix issue with CodeX.Toolips TypeScript definitions [#978](https://github.com/codex-team/editor.js/issues/978)
- `Fix` — Fix some issues with Inline and Tunes toolbars.
- `Fix` - Fix `minHeight` option with zero-value issue [#724](https://github.com/codex-team/editor.js/issues/724)
- `Improvements` — Disable Conversion Toolbar if there are no Tools to convert [#984](https://github.com/codex-team/editor.js/issues/984)

### 2.16

- `Improvements` — Inline Toolbar design improved
- `Improvements` — Conversion Toolbar now included in the Inline Toolbar [#853](https://github.com/codex-team/editor.js/issues/853)
- `Improvements` — All buttons now have beautiful Tooltips provided by [CodeX Tooltips](https://github.com/codex-team/codex.tooltips)
- `New` — new Tooltips API for displaying tooltips near your custom elements
- `New` *API* — Block [lifecycle hooks](tools.md#block-lifecycle-hooks)
- `New` *Inline Tools API* — Ability to specify Tool's title via `title` static getter.
- `Fix` — On selection from end to start backspace is working as expected now [#869](https://github.com/codex-team/editor.js/issues/869)
- `Fix` — Fix flipper with empty dom iterator [#926](https://github.com/codex-team/editor.js/issues/926)
- `Fix` — Normalize node before walking through children at `isEmpty` method [#943](https://github.com/codex-team/editor.js/issues/943)
- `Fix` — Fixed Grammarly conflict [#779](https://github.com/codex-team/editor.js/issues/779)
- `Improvements` — Module Listeners now correctly removes events with options [#904](https://github.com/codex-team/editor.js/pull/904)
- `Improvements` — Styles API: `.cdx-block` default vertical margins decreased from 0.7 to 0.4 ems.
- `Fix` — Fixed `getRangeCount` call if range count is 0 [#938](https://github.com/codex-team/editor.js/issues/938)
- `New` — Log levels now available to suppress Editor.js console messages [#962](https://github.com/codex-team/editor.js/issues/962)
- `Fix` — Fixed wrong navigation on block deletion

### 2.15.1

- `Refactoring` — Constants of tools settings separated by internal and external to correspond API
- `Refactoring` — Created universal Flipper class that responses for navigation by keyboard inside of any Toolbars
- `Fix` — First CMD+A on block with now uses default behaviour. Fixed problem with second CMD+A after selection clearing [#827](https://github.com/codex-team/editor.js/issues/827)
- `Improvements` — Style of inline selection and selected blocks improved
- `Fix` - Fixed problem when property 'observer' in modificationObserver is not defined

### 2.15

- `New` — New [`blocks.insert()`](api.md) API method [#715](https://github.com/codex-team/editor.js/issues/715).
- `New` *Conversion Toolbar* — Ability to convert one block to another [#704](https://github.com/codex-team/editor.js/issues/704)
- `New` *Cross-block selection* — Ability to select multiple blocks by mouse and with SHIFT+ARROWS [#703](https://github.com/codex-team/editor.js/issues/703)
- `Deprecated` — [`blocks.insertNewBlock()`](api.md) method is deprecated. Use `blocks.insert()` instead.
- `Improvements` — Inline Toolbar now works on mobile devices [#706](https://github.com/codex-team/editor.js/issues/706)
- `Improvements` — Toolbar looks better on mobile devices [#706](https://github.com/codex-team/editor.js/issues/706)
- `Improvements` — Now `pasteConfig` can return `false` to disable paste handling on your Tool [#801](https://github.com/codex-team/editor.js/issues/801)
- `Fix` — EditorConfig's `onChange` callback now fires when native inputs\` content has been changed [#794](https://github.com/codex-team/editor.js/issues/794)
- `Fix` — Resolve bug with deleting leading new lines [#726](https://github.com/codex-team/editor.js/issues/726)
- `Fix` — Fix inline link Tool to support different link types like `mailto` and `tel` [#809](https://github.com/codex-team/editor.js/issues/809)
- `Fix` — Added `typeof` util method to check exact object type [#805](https://github.com/codex-team/editor.js/issues/805)
- `Fix` — Remove internal `enableLineBreaks` option from external Tool settings type description [#825](https://github.com/codex-team/editor.js/pull/825)

### 2.14

- `Fix` *Config* — User config now has higher priority than internal settings [#771](https://github.com/codex-team/editor.js/issues/771)
- `New` — Ability to work with Block Actions and Inline Toolbar from the keyboard by Tab. [#705](https://github.com/codex-team/editor.js/issues/705)
- `Fix` — Fix error thrown by click on the empty editor after `blocks.clear()` method calling [#761](https://github.com/codex-team/editor.js/issues/761)
- `Fix` — Fix placeholder property appearance. Now you can assign it via `placeholder` property of EditorConfig. [#714](https://github.com/codex-team/editor.js/issues/714)
- `Fix` — Add API shorthands to TS types [#788](https://github.com/codex-team/editor.js/issues/788)

### 2.13

- `Improvements` *BlockSelection* — Block Selection allows to select single editable element via CMD+A
- `New` *API* — Added [API methods](api.md) to open and close inline toolbar [#665](https://github.com/codex-team/editor.js/issues/665)
- `New` *Config* - Added new property in EditorConfig `holder`, use this property for append Editor instead `holderId`. `holder` property now support reference on dom element. [#696](https://github.com/codex-team/editor.js/issues/696)
- `Deprecated` *Config* - `holderId` property now is deprecated and will removed in next major release. Use `holder` instead.
- `Fix` *Types* — Fixed error with `codex-notifier` package [#713](https://github.com/codex-team/editor.js/issues/713)
- `Improvements` — Close inline toolbar after creating a new link.
- `New` *Config* — Option `minHeight` for customizing Editor's bottom zone height added.

### 2.12.4

- `Improvements` — CodeX.Shortcuts version updated to the v1.1 [#684](https://github.com/codex-team/editor.js/issues/684)
- `Fix` — Do not start multi-block selection on Toolbox and Inline Toolbar [#646](https://github.com/codex-team/editor.js/issues/646)
- `Fix` — Minor fixes of caret behaviour [#663](https://github.com/codex-team/editor.js/issues/663)
- `Fix` — Fix inline-link icon position in Firefox [#674](https://github.com/codex-team/editor.js/issues/674)

### 2.12.3

- `Fix` — Make Toolbox tooltip position font-size independent

### 2.12.2

- New *Inline Tools* — pass tool settings from configuration to Tool constructor

### 2.12.1

- `Fix` — Fix processing `color-mod` function in styles

### 2.12.0

- `New` *API* - new `blocks` API method `renderFromHTML`

### 2.11.11

- `New` — Add ability to pass configuration for internal Tools

### 2.11.10

- `Fix` - Fix editor view on mobile devices

### 2.11.9

- `Fix` - Fix inline toolbar buttons margin. Update dependencies list. Update tools for example page.

### 2.11.8

- `Fix` — Block tunes margins now better works with more than 3 buttons

### 2.11.7

- `Fix` *Paste* — Fix pasting into non-initial Blocks

### 2.11.6

- `Fix` *Paste* — Polyfill for Microsoft Edge

### 2.11.5

- `Fix` *RectangeSelection* — Redesign of the scrolling zones

### 2.11.4

- `Fix` - Clear focus when click is outside the Editor instance

### 2.11.3

- `Fix` — Fix CMD+A Selection on multiple Editor instances

### 2.11.2

- `Improvements` — Docs updated and common enhancements

### 2.11.1

- `Fix` *RectangeSelection* — Selection is available only for the main mouse button

### 2.11.0

- `New` — Add API methods shorthands

### 2.10.0

- `New` — Rename from CodeX Editor to Editor.js

### 2.9.5

- `New` — Toolbox now have beautiful helpers with Tool names and shortcuts

### 2.9.4

- `Improvements` — Prevent navigating back on Firefox when Block is removing by backspace

### 2.9.3

- `Fix` — Handle paste only on initial Block

### 2.9.2

- `New` — Blocks selected with Rectangle Selection can be also removed, copied or cut

### 2.9.1

- `Improvements` — Migrate from `postcss-cssnext` to `postcss-preset-env` and disable `postcss-custom-properties` which conflicts with `postcss-preset-env`

### 2.9.0

- `New` *RectangeSelection* — Ability to select Block or several Blocks with mouse

### 2.8.1

- `Fix` *Caret* — Fix "History back" call on backspace in Firefox

### 2.8.0

- `Imporvements` *API* — Added [API methods](api.md#caretapi) to manage caret position

### 2.7.32

- `Improvements` *Types* — TypeScript types sre updated

### 2.7.31

- `Fix` — Caret now goes through <input> elements without `type` attribute

### 2.7.30

- `Fix` — Fixed selection behavior when text has modifiers form Inline Toolbar

### 2.7.29

- `Fix` — cmd+x works only for custom selection now

### 2.7.28

- `New` [Tools Validation](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#validate-optional) is added.

### 2.2.27

- `New` *Mobile view* — Editor now adopted for mobile devices
- `New` *Narrow mode* — Editor now adopted for narrow containers

### 2.2.26

- `Improvements` *Caret* — Improvements of the caret behaviour: arrows, backspace and enter keys better handling.

### 2.2.25

- `New` *Autofocus* — Now you can set focus at Editor after page has been loaded

### 2.2.24

- `Improvements` *Paste* handling — minor paste handling improvements

### 2.2.23

- `New` *Shortcuts* — copy and cut Blocks selected by CMD+A

### 2.2—2.7

- `New` *Sanitize API* — [Sanitize Config](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#automatic-sanitize) of `Block Tools` now automatically extends by tags of `Inline Tools` that is enabled by current Tool by `inlineToolbar` option. You don't need more to specify `a, b, mark, code` manually. This feature will be added to fields that supports inline markup.
- `New` *Block Selection* — Ability to select Block by `CMD+A`, and the whole Editor by double `CMD+A`. After that, you can copy (`CMD+C`), remove (`Backspace`) or clear (`Enter`) selected Blocks.
- `New` *[Styles API](https://github.com/codex-team/editor.js/blob/master/types/api/styles.d.ts)* — Added `button` class for stylization of any buttons provided by Tools with one unified style.
- `New` *[Notifier API](https://github.com/codex-team/editor.js/blob/master/docs/api.md#notifierapi)* — methods for showing user notifications: on success, errors, warnings, etc.
- `New` *Block Tool* — [Table](http://github.com/editor-js/table) constructor 💪
- `New` If one of the Tools is unavailable on Editor initialization, its Blocks will be rendered with *Dummy Block*, describing that user can not edit content of this Block. Dummy Blocks can be moved, removed and saved as normal Blocks. So saved data won't be lost if one of the Tools is failed
- `New` [Public TS-types](https://github.com/codex-team/editor.js/tree/master/types) are presented.
- `Changes` *Tools API*  — options `irreplaceable` and `contentless` was removed.
- `Changes` *Tools API* — [Paste API](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#paste-handling): tags, patterns and mime-types now should be specified by Tool's `pasteConfig` static property. Custom Paste Event should be handled by `onPaste(event)` that should not be static from now.
- `Changes` *Tools API* — options `displayInToolbox ` and `toolboxIcon` was removed. Use [`toolbox`](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#internal-tool-settings) instead, that should return object with `icon` and `title` field, or `false` if Tool should not be placed at the Toolbox. Also, there are a way to override `toolbox {icon, title}` settings provided by Tool with you own settings at the Initial Config.
- `Improvements` — All Projects code now on TypeScript
- `Improvements` — NPM package size decreased from 1300kb to 422kb
- `Improvements` — Bundle size decreased from 438kb to 252kb
- `Improvements` — `Inline Toolbar`: when you add a Link to the selected fragment, Editor will highlight this fragment even when Caret is placed into the URL-input.
- `Improvements` — Block Settings won't be shown near empty Blocks of `initialType` by default. You should click on them instead.
- `Improvements` — `onChange`-callback now will be fired even with children attributes changing.
- `Improvements` — HTMLJanitor package was updated due to found vulnerability
- `Improvements` — Logging improved: now all Editor's logs will be preceded by beautiful label with current Editor version.
- `Improvements` — Internal `isEmpty` checking was improved for Blocks with many children nodes (200 and more)
- `Improvements` — Paste improvements: tags that can be substituted by Tool now will matched even on deep-level of pasted DOM three.
- `Improvements` — There is no more «unavailable» sound on copying Block by `CMD+C` on macOS
- `Improvements` — Dozens of bugfixes and small improvements

See a whole [Changelog](/docs/)

### 2.1-beta changelog

- `New` *Tools API* — support pasted content via drag-n-drop or from the Buffer. See [documentation](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#paste-handling) and [example](https://github.com/editor-js/simple-image/blob/master/src/index.js#L177) at the Simple Image Tool.
- `New` *Tools API* — new `sanitize` getter for Tools for automatic HTML sanitizing of returned data. See [documentation](https://github.com/codex-team/editor.js/blob/master/docs/tools.md#sanitize) and [example](https://github.com/editor-js/paragraph/blob/master/src/index.js#L121) at the Paragraph Tool
- `New` Added `onChange`-callback, fired after any modifications at the Editor. See [documentation](https://github.com/codex-team/editor.js/blob/master/docs/installation.md#features).
- `New` New Inline Tool example — [Marker](https://github.com/editor-js/marker)
- `New` New Inline Tool example — [Code](https://github.com/editor-js/code)
- `New` New [Editor.js PHP](http://github.com/codex-team/codex.editor.backend) — example of server-side implementation with HTML purifying and data validation.
- `Improvements` - Improvements of Toolbar's position calculation.
- `Improvements` — Improved zero-configuration initialization.
- and many little improvements.