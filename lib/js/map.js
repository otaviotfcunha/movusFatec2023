/**
 * Rendering a Google Map from a JSON file.
 *
 * Adding markers to a Google Map using a local JSON file | deadwood
 * {@link https://www.d-wood.com/blog/2019/07/24_11342.html}
 */
export default class YourMap {
  /**
   * Constructor
   */
  constructor(jsonPath, mapCanvas) {
    this._jsonPath = jsonPath;
    this._mapCanvas = mapCanvas;
    this._themePath = "";
    this._icons = {
      normal: {
        icon: null
      },
      special: {
        icon: "lib/imgs/bus/bus.png"
      }
    };
  }

  /**
   * Initializing a Google Map.
   */
  initMap() {
    fetch(this._jsonPath)
      .then(response => response.json())
      .then(m => this.plotMarkers(m));
  }

  /**
   * Plot marker pins to mapCanvas.
   */
  plotMarkers(m) {
    const mapCanvas = this._mapCanvas;
    let markers = [];
    let bounds = new google.maps.LatLngBounds();

    m.forEach(marker => {
      const position = new google.maps.LatLng(marker.lat, marker.lng);
      const { content, type } = marker;

      markers.push(this.createMarker(position, content, type));
      bounds.extend(position);
    });

    if (markers.length === 1) {
      return mapCanvas.bounds;
    } else {
      return mapCanvas.fitBounds(bounds);
    }
  }

  /**
   * Create marker pin.
   */
  createMarker(position, content, type) {
    const mapCanvas = this._mapCanvas;
    const icons = this._icons;

    const marker = new google.maps.Marker({
      position: position,
      map: mapCanvas,
      content: content,
      icon: icons[type].icon,
      animation: google.maps.Animation.DROP
    });

    const infowindow = new google.maps.InfoWindow({
      content: `<div>${marker.content}</div>`
    });

    marker.addListener("click", () => {
      infowindow.open(mapCanvas, marker);
    });
  }
}