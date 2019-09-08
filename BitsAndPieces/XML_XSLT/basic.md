# XML
XML needs to be parsed before the data it holds can be used.
PHP main strategies to work with XML documents
  + 1. Event-based Parsing
  + 2. Tree-based Parsing


###  1. Event-based Parsing
Works through the XML documents and every time the parser encounters a new XML item, it calls a function you have defined.
Expat is used by PHP as the parser for event-based parsing. 
 You can specify the callback functions for a variety of events:
  + start of element
  + end of element
  + char data
  + namespaces
  + regex custom events and more....

### 2. Tree-based Parsing
Create a virtual tree out of the parsed data, becomes accessible through the DOM.
You can use the bracket notation to refer to different sections in the tree.
```
## example for a virtual tree containing multiple channels, sections and items in its sub branches.
  document.channels[1].sections[1].item[2]
```

### ------------
Tree-based parsers are generally slower than event-based parsers. But they provide an easier interface to
navigating through the underlying XML data.
You can create a DOM tree using an event-based parser by using appropriate code for each callback function.
