import React, { useState, useEffect } from 'react';

const LocationTracker = () => {
  const [location, setLocation] = useState(null);
  const [error, setError] = useState(null);

  useEffect(() => {
    const watchId = navigator.geolocation.watchPosition(
      (position) => {
        setLocation({
          latitude: position.coords.latitude,
          longitude: position.coords.longitude,
        });
      },
      (err) => {
        setError(err.message);
      }
    );

    // Cleanup the watcher when the component unmounts
    return () => {
      navigator.geolocation.clearWatch(watchId);
    };
  }, []); // Empty dependency array means this effect runs once after the initial render

  return (
    <div>
      {error && <p>Error: {error}</p>}
      {location && (
        <p>
          Latitude: {location.latitude}, Longitude: {location.longitude}
        </p>
      )}
    </div>
  );
};

export default LocationTracker;